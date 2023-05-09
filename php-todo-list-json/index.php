<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <title>TodoList</title>
</head>
<body class="bg-primary">
    <div id="app">
        <div>
                <h1 class="text-center text-white m-3 text-uppercase">TodoList</h1>
                <div class="container d-flex align-items-center justify-content-center">
                <div class="card mt-4">
                    <div class="card-header d-flex gap-3">
                        <input type="text" placeholder="add ingredients" v-model="todoItem" @keyup.enter="updateItem">
                        <button @click="updateItem" class="btn btn-outline-primary ml-4" type="button" id="button-add">Add</button>
                    </div>
                    <div class="card-body d-flex justify-content-center align-items-center">
                            <ul class="list-unstyled" v-if="todoList.length > 0 ">
                    <li @click="complete(index)" class="d-flex justify-content-between" v-for="(item, index) in todoList" :class="item.complete ? 'text-decoration-line-through': '' ">
                                    <p>{{item.text}}</p>
                                </li>
                            </ul>
                            <p v-else>List Empty</p> 
                          </div>
                         </div>    
                </div>   
             </div>            

    </div>
 <script src="./js/script.js"></script>
</body>
</html> 