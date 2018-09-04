<template>
    <div class="list-rendering">
        <ul>
            <li v-for="(value, key, index) of myInfo">
                {{ key }} - {{ value }} - index {{index}}
            </li>
            <!-- v-for in one to hundred -->
            <div>
                <span v-for="n in 100">{{ n }} </span>
            </div>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                myInfo: {
                    name: 'Quang Hung',
                    age: '2x',
                    country: 'vietnam'
                }
            }
        }
    }
</script>
