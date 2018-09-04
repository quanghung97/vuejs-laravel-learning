<template>
    <div class="my-component">
        <div>
            {{ message }}
        </div>
        <div>
            {{ saySomeThing(text) }}
        </div>
        <div>
            <button v-on:click="sayHello" type="button">button</button>
        </div>
        <div>
            {{ sayGoodbye() }}
        </div>
        <div>{{ reverseMessage }}</div>
        <h2>CLick button change message</h2>
        <div>
            <button @click="changeMesage" type="button">Change message</button>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: 'This is my first component using binding data',
                text: 'this is text'
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
            },
            saySomeThing(text) {
                var text = text.toUpperCase();
                return text;
            },
            changeMesage() {
                this.message = 'this is new message'
            }
        },
        computed: {
            reverseMessage() {
                return this.message.split('').reverse().join('');
            }
        },
        watch: {
            message() {
                console.log('message changed')
            }
        }
    }
</script>
