<template>
    <div v-if="!noTasks">
        <div class="tsk" v-if="!isEdit">
            <span>{{id}}</span>
            <p>{{date}}</p>


            <div v-if="!isCompleted">
                <p>{{text}}</p>
            </div>

            <div v-else>
                <p :class="styles">{{text}}</p>
            </div>



            <button @click="$emit('delTask', id)"><b>Delete task</b></button>
            <button @click="done"><b>Done</b></button>
            <button @click="edit"><b>Edit task</b></button>

        </div>
        <div class="tsk" v-else>
            <input type="date" v-model="newDate" placeholder="this.date" /><br />
            <textarea v-model="newTsk"></textarea><br />
            <button @click="save">Save</button>

        </div>
    </div>

    <div v-else>
        <p >You have no tasks. Please, click button "Creat new task" for add new task.</p>
    </div>
</template>

<script>
    export default {
        name: 'AllTasks',
        props: ['id', 'date', 'text'],

        data() {
            return {
                isEdit: false,
                isCompleted: false,
                newId: this.id,
                newDate: this.date,
                newTsk: this.text,
                
                
                styles: {
                    done: true,
                },

                
               
            }
        },

        methods: {
            edit() {
                this.isEdit = true;
            },

            save() {
               this.isEdit = false;
                this.$emit('edit', this.newId, this.newDate, this.newTsk);
            },

            done() {
                
                this.isCompleted = true;

                },
            
        }
    }
</script>

<style>
    

    .tsk {
        margin: 5px;
        height: 200px;
        background-color: antiquewhite;
        border: 3px ridge purple;
        padding: 5px;
        overflow-y: scroll;
    }

        .tsk > button {
            width: auto;
            height: 30px;
            float: right;
            background-color: coral;
            border: 3px ridge purple;
            border-radius: 10px;
            color: azure;
            transition: 1s;
            font-size: 0.8em;
            margin: 10px;
            cursor: pointer;
        }

    .tsk > input {
        width: 100%;
        background-color: antiquewhite;
        color: black;
        font-size: 1.5em;
        margin-bottom: 10px;
        padding: 5px;
    }

    .tsk > textarea {
        width: 100%;
        background-color: antiquewhite;
        color: black;
        font-size: 1.5em;
        height: 100px;
        resize: none;
        margin-bottom: 10px;
        overflow-y: scroll;
    }

    .done {
        text-decoration: line-through;
        color: grey;
    }

    
</style>