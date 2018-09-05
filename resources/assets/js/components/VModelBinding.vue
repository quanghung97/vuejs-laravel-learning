<template>
    <div class="v-model-binding">
        <div class="text">
            {{ message }}
        </div>
        <div class="input-form">
            <input type="text" :placeholder="placeholder" :value="value" name="">
        </div>
        <div class="input-form">
            <!-- change message string to number -->
            <input type="number" v-model.number="message" name="">
        </div>
        <div class="input-form">
            <!-- remove space 2 đầu string -->
            <input type="number" v-model.trim="message" name="">
        </div>
        <div class="input-form">
            <input type="text" v-model.lazy="message" name="">
        </div>
        <div class="input-form">
            <input type="checkbox" v-model="check" name="">
        </div>
        <div class="input-form">
            <input type="radio" v-model="radio" value="one">
            <input type="radio" v-model="radio" value="two">
        </div>
        <div class="input-form">
            <select v-model="select">
                <option disabled="">Choose one</option>
                <!-- <option value="one">One</option>
                <option value="two">Two</option> -->
                <option :value="values.one">One</option>
                <option :value="values.two">Two</option>
            </select>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: '',
                check: false,
                radio: '',
                select: '',
                values: {
                    one: 'This is One',
                    two: 'This is Two'
                },
                placeholder: 'this is placeholder',
                value: 'this is value'
            }
        }
    }
</script>
