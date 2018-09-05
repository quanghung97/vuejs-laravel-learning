<template>
    <div class="binding-html">
        <!-- binding class object,array, deu dc -->
        <div class="text-title" :class="{active: isActive, hide: isHide, bold: isBold}" :style="{backgroundColor: color}">
            This is text
        </div>
        <div>
            <button @click="isActive = true">Active text</button>
        </div>
        <div>
            <button @click="isHide = true">Hide text</button>
        </div>
        <div>
            <button @click="isBold = true">Bold text</button>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                isActive: false,
                isHide: false,
                isBold: false,
                color: 'blue'
            }
        }
    }
</script>
