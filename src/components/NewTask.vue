<template>
    <div class="boxNewTask" v-if="creatNew">
        <input type="date" v-model="newDate" /><br />

        <textarea v-model="newTsk">

        </textarea><br />
        <div class="boxNewTskBtn"  style="width: auto;">
        <button @click="save">Add new task</button>
        </div>
    </div>

    <div class="addNewTask" v-else>
        <button @click="newTask" >Creat new task</button>

    </div>
</template>

<script>
    export default {
        name: 'NewTask',
        props: ['date', 'text'],

        data() {
            return {
                creatNew: false,
                newDate: ' ',
                newTsk: ' ',
                
            }
        },

        methods: {
            newTask() {
                this.creatNew = true;
            },

            save() {
                this.creatNew = false;
                this.$emit('addTask', this.newDate, this.newTsk);
            }
        }
    }
</script>

<style>
    .boxNewTask {
        display: inline-block;
        
        width: 30%;
        height: 200px;
        border: 5px ridge gold;
        border-radius: 10px;
        margin: 10px;
        padding: 20px;
    }

    .boxNewTskBtn{
        width: auto;
    }

   .boxNewTskBtn > button {
       width: auto;
       height: 40px;
       float: right;
       background-color: coral;
       border: 3px ridge purple;
       border-radius: 10px;
       color: azure;
       transition: 1s;
       font-size: inherit;
       font-weight: bold;
       cursor: pointer;
        }

    @media(max-width: 659px) {
        .boxNewTask {
            
            width: 100%;
            height: 200px;
            border: 5px ridge gold;
            border-radius: 10px;
            margin: 10px;
            padding: 20px;
        }
    }

    .boxNewTask > button:hover {
        background-color: brown;
        color: azure;
        border-color: red;
        height: 45px;
    }

    .addNewTask {
        display: block;
        float: right;
        width: auto;
        height: 100px;
        margin: 10px;
        padding: 20px;
    }

    .addNewTask>button {
        width: auto;
        height: 50px;
        background-color: coral;
        border: 3px ridge purple;
        border-radius: 10px;
        color: azure;
        transition: 1s;
        font-size:inherit;
        font-weight: bold;
        cursor: pointer;
        }

        .addNewTask > button:hover {
            background-color: brown;
            color: azure;
            border-color: red;
            height: 45px;
        }

    .boxNewTask > input {
        width: 100%;
        background-color: antiquewhite;
        color: black;
        font-size: 1.5em;
        margin-bottom: 10px;
        padding: 5px;
        }

    .boxNewTask > textarea {
        width: 100%;
        background-color: antiquewhite;
        color: black;
        font-size: 1.5em;
        height: 100px;
        resize: none;
        margin-bottom: 10px;
    }
</style>