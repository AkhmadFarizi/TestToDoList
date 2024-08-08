<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Task;
use Illuminate\Http\Request;

/**
 * @OA\Info(
 *     version="1.0.0",
 *     title="User & Task Management API",
 *     description="API untuk mengelola data user dan tugas.",
 *     @OA\Contact(
 *         email="support@yourdomain.com"
 *     ),
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 */
class PostController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/save",
     *     summary="Simpan user dan tugas",
     *     tags={"Posts"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             @OA\Property(property="user", type="object",
     *                 @OA\Property(property="name", type="string", example="John Doe"),
     *                 @OA\Property(property="username", type="string", example="johndoe"),
     *                 @OA\Property(property="email", type="string", example="johndoe@example.com")
     *             ),
     *             @OA\Property(property="tasks", type="array",
     *                 @OA\Items(
     *                     @OA\Property(property="name", type="string", example="Complete project"),
     *                     @OA\Property(property="category_id", type="integer", example=1)
     *                 )
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Data berhasil disimpan",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=true),
     *             @OA\Property(property="message", type="string", example="Data saved successfully")
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Kesalahan validasi",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=false),
     *             @OA\Property(property="errors", type="object")
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Kesalahan server",
     *         @OA\JsonContent(
     *             @OA\Property(property="success", type="boolean", example=false),
     *             @OA\Property(property="message", type="string", example="Server error")
     *         )
     *     )
     * )
     */
    public function store(Request $request)
    {
        try {
            // Validasi input
            $validated = $request->validate([
                'user' => 'required|array',
                'user.name' => 'required|string',
                'user.username' => 'required|string|unique:users,username', // Unik
                'user.email' => 'required|email|unique:users,email', // Unik
                'tasks' => 'required|array',
                'tasks.*.name' => 'required|string',
                'tasks.*.category_id' => 'required|exists:categories,id',
            ]);
    
            // Simpan data user
            $userData = $validated['user'];
            $user = User::create($userData);
    
            // Simpan tasks
            foreach ($validated['tasks'] as $task) {
                Task::create([
                    'description' => $task['name'],
                    'category_id' => $task['category_id'],
                    'user_id' => $user->id,
                ]);
            }
    
            return response()->json(['success' => true, 'message' => 'Data saved successfully'], 200);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'errors' => $e->errors()
            ], 422); // Mengembalikan kode status 422 untuk validasi
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/get",
     *     summary="Dapatkan semua user beserta tugas",
     *     tags={"Get All Data"},
     *     @OA\Response(
     *         response=200,
     *         description="Data user beserta tugas berhasil diambil",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(
     *                 @OA\Property(property="id", type="integer", example=1),
     *                 @OA\Property(property="name", type="string", example="John Doe"),
     *                 @OA\Property(property="tasks", type="array",
     *                     @OA\Items(
     *                         @OA\Property(property="description", type="string", example="Complete project"),
     *                         @OA\Property(property="category", type="object",
     *                             @OA\Property(property="id", type="integer", example=1),
     *                             @OA\Property(property="name", type="string", example="Category Name")
     *                         )
     *                     )
     *                 )
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Kesalahan server"
     *     )
     * )
     */
    public function get()
    {
         // Mengambil semua data user beserta tugas dan kategori tugasnya
         $users = User::with(['tasks.category'])->get();

         // Mengembalikan data sebagai JSON
         return response()->json($users);
    }
}


