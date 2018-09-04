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
        <br />
        <br />

        <div>
            <div>{{ content.text }}</div>
            <div><button @click="changeContent">Change Content</button></div>
            <div>{{ content.type }}</div>
            <div><button @click="changeType">Change Text</button></div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: 'This is my first component using binding data',
                text: 'this is text',
                content : {
                    type: 'name',
                    text: 'abcxyz'
                }
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
            },
            changeContent() {
                this.content.text = 'this is new content'
            },
            changeType() {
                this.content.type = 'changed type'
            }
        },
        computed: {
            reverseMessage() {
                return this.message.split('').reverse().join('');
            },
            getType() {
                return this.message.type;
            },
            getText() {
                return this.message.text;
            }
        },
        watch: {
            // message() {
            //     console.log('message changed')
            // },
            // message: {
            //     handler() {
            //         console.log('something changed')
            //     },
            //     deep: true
            // }
           'content.text' : function(newVal, oldVal) {
               console.log('watching ' + newVal + ' and ' + oldVal);
           },
           'content.type' : function(newVal, oldVal) {
               console.log('watching ' + newVal + ' and ' + oldVal);
           }
        }
    }
</script>
