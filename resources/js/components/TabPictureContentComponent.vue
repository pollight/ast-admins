<template>
    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <span class="nav-link active">Original</span>
            </li>
            <li class="nav-item">
                <span class="nav-link">X-ray</span>
            </li>
            <li class="nav-item">
                <span class="nav-link">Gray</span>
            </li>
        </ul>

        <div class="tab-content">
            <div class="picture item-1 mb-2"
                 :style="picture1"
            ></div>

            <div class="picture item-2"
                 :style="picture2"
            ></div>
        </div>
    </div>
</template>

<script>

    import draggable from 'vuedraggable'

    import vSelect from 'vue-select'
    import "vue-select/src/scss/vue-select.scss";

    import DialogDrag from 'vue-dialog-drag'
    import "vue-dialog-drag/dist/vue-dialog-drag.css";

    export default {
        components: {
            draggable,
            vSelect,
            DialogDrag
        },
        data: function () {

            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                picture1: 'background-image: url(' + this.pictures['original'][1] + ')',
                picture2: 'background-image: url(' + this.pictures['original'][2] + ')',

            }
        },
        props: [
            'pictures',
        ],
        mounted() {
            console.log(this.pictures);
        }
    }
</script>