const { createApp } = Vue;

createApp({
    data() {
        return {
        todoList : [],
        apiUrl: 'server.php',
        todoItem: ''
      }
    },
    methods: {
       createList (){
         axios.get(this.apiUrl).then((res)=> {
             this.todoList = res.data;
         });
           
        },

        updateItem (){
            const data = {
                text: this.todoItem,
                complete : false

            }
            
            axios.post(this.apiUrl, data, { headers: {'Content-Type': 'multipart/form-data'} }).then((res)=>{
                   this.todoItem = '';
                   this.todoList = res.data
            });
            console.log (this.todoList);
        },

       complete (index){
        this.todoList[index].complete = !this.todoList[index].complete;
       },
    },
    mounted() {
        this.createList()
    },
   

}).mount('#app');