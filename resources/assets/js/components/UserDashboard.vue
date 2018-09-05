<template>
    <div class="user-dashboard">
        <div class="list-user-comp">
            <h4>List User</h4>
            <!-- name function child sent -->
            <ListUser @userSelected="childrenSelectUser"></ListUser>

        </div>
        <hr>
        <div class="user-detail-comp">
            <h4>User Detail</h4>
            <!-- userDetailInfo is the props in UserDetail component -->
            <UserDetail v-bind:userDetailInfo="userSelectedFromChild"></UserDetail>

        </div>
    </div>
</template>


<script>
    import ListUser from './ListUser.vue';
    import UserDetail from './UserDetail.vue';
    export default {
        components: {
            ListUser,
            UserDetail
        },
        data() {
            return  {
                userSelectedFromChild: {} //data want send to UserDetail components
            }
        },
        methods: {
            // Process event emitted from child
            childrenSelectUser(user) {
                console.log(user);//bắt sự kiện thông qua methods
                this.userSelectedFromChild = user;//gán data bằng object
            }
        }
    }
</script>
