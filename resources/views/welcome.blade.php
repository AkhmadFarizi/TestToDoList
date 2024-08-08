<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
    </style>
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 text-center">
                <img style="width: 220px" src="https://energeek.id/wp-content/uploads/2018/02/energeek2.png" alt="" srcset="">
            </div>

            <div class="mt-4">
                <form id="todoForm">
                    <div class="card shadow-sm">
                        <div class="m-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Nama">
                                    <span id="nameError" class="text-danger"></span> <!-- Tempat untuk pesan kesalahan nama -->
                                </div>
                                <div class="col-md-4">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" placeholder="Username">
                                    <span id="usernameError" class="text-danger"></span> <!-- Tempat untuk pesan kesalahan username -->
                                </div>
                                <div class="col-md-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                    <span id="emailError" class="text-danger"></span> <!-- Tempat untuk pesan kesalahan email -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-4">
                        <h3>To Do List</h3>
                        <button class="btn btn-danger" id="addTodoBtn">
                            <i class="fa fa-plus" aria-hidden="true"></i> Tambah To Do
                        </button>
                    </div>
                    
                    <div id="todoContainer">
                        
                    </div>
                    
                    <div class="row mt-2">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>


        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        function loadCategories() {
            axios.get('/api/categories')
                .then(response => {
                    const data = response.data;
                    const dropdowns = document.querySelectorAll('.category-dropdown');
                    dropdowns.forEach(dropdown => {
                        data.forEach(category => {
                            const option = document.createElement('option');
                            option.value = category.id;
                            option.textContent = category.name;
                            dropdown.appendChild(option);
                        });
                    });
                })
                .catch(error => {
                    console.error('Error fetching categories:', error);
                });
        }

        function loadCategories1() {
            axios.get('/api/get')
                .then(response => {
                    const data = response.data;
                    console.log(data);
                })
                .catch(error => {
                    console.error('Error fetching categories:', error);
                });
        }
    
        function addTodoItem() {
            const todoItem = document.createElement('div');
            todoItem.classList.add('row', 'mt-2', 'todo-item');
            todoItem.innerHTML = `
                <div class="col-md-9">
                    <div class="Todo">
                        <label class="form-label">To Do List </label>
                        <input type="text" class="form-control" placeholder="Contoh : Perbaikan Api">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="Todo d-flex justify-content-between">
                        <div>
                            <label class="form-label">Category </label>
                            <select class="form-control category-dropdown">
                                <!-- Options will be populated here -->
                            </select>
                        </div>
                        <div style="margin-top: 15%; margin-left: 10px;">
                            <button class="btn btn-danger removeTodoBtn">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>
            `;
    
            document.getElementById('todoContainer').appendChild(todoItem);
            loadCategories();
        }
    
        document.getElementById('addTodoBtn').addEventListener('click', function(event) {
            event.preventDefault(); 
            addTodoItem();
        });

        document.getElementById('todoContainer').addEventListener('click', function(event) {
                if (event.target.classList.contains('removeTodoBtn') || event.target.closest('.removeTodoBtn')) {
                    const todoItem = event.target.closest('.todo-item');
                    if (todoItem) {
                        todoItem.remove(); // Remove the todo item after confirmation
                        Swal.fire('Dihapus!', 'Data Anda telah dihapus.', 'success');
                    }
                }
        });

    
        document.getElementById('todoForm').addEventListener('submit', function(event) {
            event.preventDefault(); 

            
            document.getElementById('nameError').textContent = '';
            document.getElementById('usernameError').textContent = '';
            document.getElementById('emailError').textContent = '';

            const name = document.getElementById('name').value.trim();
            const username = document.getElementById('username').value.trim();
            const email = document.getElementById('email').value.trim();

           
            const tasks = Array.from(document.querySelectorAll('.todo-item')).map(item => {
                const taskName = item.querySelector('input[type="text"]').value.trim();
                const category_id = item.querySelector('.category-dropdown').value;
                return { name: taskName, category_id };
            });


            fetch('/api/save', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    user: { name, username, email },
                    tasks
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire('Berhasil!', 'Data Anda telah disimpan.', 'success');
                    
                    document.getElementById('name').value = '';
                    document.getElementById('username').value = '';
                    document.getElementById('email').value = '';

                    
                    document.getElementById('todoContainer').innerHTML = '';
                } else {
                    // Menampilkan pesan kesalahan dari server
                    console.log(data.errors);
                    
                    if (data.errors) {
                        if (data.errors['user.name']) {
                            document.getElementById('nameError').textContent = data.errors['user.name'][0];
                        }
                        if (data.errors['user.username']) {
                            document.getElementById('usernameError').textContent = data.errors['user.username'][0];
                        }
                        if (data.errors['user.email']) {
                            document.getElementById('emailError').textContent = data.errors['user.email'][0];
                        }
                    }
                    Swal.fire('Gagal!', data.message || 'Terjadi kesalahan saat menyimpan data.', 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire('Gagal!', 'Terjadi kesalahan saat menyimpan data.', 'error');
            });
        });

        loadCategories();
        loadCategories1();
    </script>
    
    
    
    
</body>
</html>
