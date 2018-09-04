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
            }
        },
        computed: {
            reverseMessage() {
                return this.message.split('').reverse().join('');
            }
        }
    }
</script>
