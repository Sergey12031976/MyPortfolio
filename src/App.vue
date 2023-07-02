<template>
    <div id="app">

        <div class="boxAllTasks">

            <div v-if="noTasks">
                <NoTasks />
            </div>
            
            <div v-else>
                <AllTasks v-for="task in tasks"
                          :id="task.id"
                          :date="task.date"
                          :text="task.text"
                          :key="task.id"
                          @edit="edit"
                          @delTask="delTask" />
            </div>
            
        </div>
        
            <NewTask date="this.date" text="Input your task" @addTask="addTask" />
        
        </div>
</template>

<script>
    import NewTask from './components/NewTask.vue';
    import AllTasks from './components/AllTasks.vue';
    import NoTasks from './components/NoTasks.vue';
    
    


    export default {
        name: 'app',
        components: {
            NewTask,
            AllTasks,
            NoTasks,
            
            
        },

        data() {
            return {
                date: Date(),
                text: '',
                noTasks: true,

                isTasks: {
                    notasks: false,
                },
                

                tasks: [
                    {
                        id:0 

                    },
                    


                ]

            };


        },

        methods: {

            delTask(id) {
                this.tasks = this.tasks.filter((task) => {
                    return task.id != id;
                    
                });

                if (this.tasks.length == 0) {
                    let id = 0;
                    this.noTasks = true;
                    this.tasks.push({
                        id,
                    })
                }
                
            },

            edit(id, date, text) {
                this.tasks = this.tasks.map((task) => {
                    if (task.id === id) {
                        task.date = date;
                        task.text = text;
                    }
                    return task;
                })

            },

            addTask(date, text) {


                this.noTasks = false; //скрывает собщение об остуствии задач
                let id = this.tasks[this.tasks.length - 1].id + 1;

                this.tasks.push({
                    id,
                    date,
                    text,
                });

                
                    this.delTask(0);

            },
        }
    };
</script>

<style>
    body{
        background: url('components/images/fon.png') no-repeat center center;
    }

    .boxAllTasks {
        display: inline-block;
        float: left;
        width: 45%;
        height: 600px;
        border: 5px ridge gold;
        border-radius: 10px;
        margin: 10px;
        padding: 20px;
        overflow-y: scroll; 
    }

    @media(max-width: 659px) {
        .boxAllTasks {
            display: block;
            width: 100%;
            height: 400px;
            border: 5px ridge gold;
            border-radius: 10px;
            margin: 10px;
            padding: 20px;
        }
    }

    
</style>

