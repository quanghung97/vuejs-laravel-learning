<template>
    <div class="conditional-rendering-v-for-if">
        <ul>
            <!-- using v-if performance too slow should use computed each item -->
            <li v-for="todo in listCompleteTodo">
              {{ todo.name }} - {{ todo.isComplete }}
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                todos: [
                    {
                        name: 'to do 1',
                        isComplete: true
                    },
                    {
                        name: 'to do 2',
                        isComplete: false
                    },
                    {
                        name: 'to do 3',
                        isComplete: true
                    },
                    {
                        name: 'to do 4',
                        isComplete: false
                    },
                ]
            }
        },
        computed: {
            listCompleteTodo() {
                return this.todos.filter(item => item.isComplete === false)
            }
        }
    }
</script>
