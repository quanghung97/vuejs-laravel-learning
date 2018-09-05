<template>
    <div class="life-cycle">
        <p id="my-text">asdsadsadsadasda</p>
        {{counter}}
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: 'Hello World',
                counter: 0
            }
        },
        // beforeCreate() {
        //     console.log(this.message);//data dont reactive, events dont exist
        // }
        /*
        /Ngay khi component được tạo, hàm created có thể được sử dụng để thao tác
         với các dữ liệu trong data và các sự kiện mà các bạn thiết lập đã có thể được kích hoạt.
        Nhưng template và DOM ảo chưa được mount và render,
        tức là nếu các bạn truy cập đến các phần tử trong DOM lúc này sẽ không được và báo lỗi
        */
        // created() {
        //     console.log(this.message)
        //
        //     console.log(document.getElementById('my-text').innerHTML)
        // }
        /*
        beforeMount được gọi sau khi component đã được compile và trước lần render đầu tiên.
        Ở giai đoạn này khi các bạn truy cập đến các phần tử trong DOM vẫn sẽ báo lỗi
        */
        // beforeMount() {
        //     console.log(this)
        //     console.log(document.getElementById('my-text').innerHTML)
        //  }
        /*mouted Ở quá trình này chúng ta đã có đầy đủ quyền truy cập vào data, template, DOM
        */
        // mounted() {
        //     console.log(this.$el)
        //     console.log(document.getElementById('my-text').innerHTML)
        //  }
        /*
        beforeUpdate
        Quá trình này được gọi ngay sau khi dữ liệu trên component bị thay đổi và trước khi component re-render,
         ví dụ bên dưới sẽ log ra màn hình liên tục các giá trị của counter sau khi nó bị thay đổi và trước khi DOM được re-render:
        */
        // beforeUpdate() {
        // console.log(this.counter); // Logs the counter value every second, before the DOM updates.
        // },
        // created() {
        //     setInterval(() => {
        //         this.counter++
        //     }, 1000)
        // }
        /*
        updateed
        Quá trình này xảy ra sau beforeUpdate, ở đây DOM đã được cập nhật lại,
         ở ví dụ dưới ta có thể so sánh giá trị ngay sau khi ta set ở mỗi vòng interval và giá trị sau khi updated đều bằng nhau,
          chứng ta DOM đã được re-render thành công
        */
    }
</script>
