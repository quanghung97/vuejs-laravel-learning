<template>
    <div class="my-component">
        <div>
            {{ message }}
        </div>
        <div>
            <button v-on:click="sayHello" type="button">button</button>
        </div>
        <div>
            {{ sayGoodbye() }}
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: 'This is my first component using binding data'
            };
        },
        methods: {
            sayHello() {
                alert('Hello World')
            },
            sayGoodbye() {
                return (
                    'goodbye'
                )
            }
        }
    }
</script>
