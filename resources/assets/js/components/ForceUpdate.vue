<template>
    <div class="force-update">
        <div>
            Name: {{ person.name }}
        </div>
        <div>
            Nick name: {{ person.nickname }}
        </div>
        <div>
            <button @click="changeName">Change Name</button>
        </div>
        <div>
            <button @click="changeNickname">Change Nick Name</button>
        </div>
        <div>
            <button @click="changeNicknameProperly">Change NIck name properly</button>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
          person: {
                name: 'Edson'
            }
        }
    },
    methods: {
        changeName() {
            this.person.name = 'Arantes';
        },
        changeNickname() {
            this.person.nickname = Math.random().toString(36).substring(7);
            this.$forceUpdate();//không khai báo trên data or Vue.set thì ko phải dạng dữ liệu reactive nên sẽ ko render ra ngoài mặc dù event data vẫn load được
        },
        changeNicknameProperly() {//nếu click đoạn này trước thì sẽ có data person.nickname rồi và dạng reactive nền ko cần forceUpdate
            Vue.set(this.person, 'nickname', 'Louis');// object , attribute, value
        }
    }
}
</script>
