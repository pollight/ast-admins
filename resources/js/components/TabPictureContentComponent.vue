<template>
    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <span class="nav-link"
                      v-bind:class="{active : CurrentNavItemPicture === 'original'}"
                      @click="setCurrentNavItemPicture('original')"
                >Original</span>
            </li>
            <li class="nav-item">
                <span class="nav-link"
                      v-bind:class="{active : CurrentNavItemPicture === 'x-Ray'}"
                      @click="setCurrentNavItemPicture('x-Ray')"
                >X-ray</span>
            </li>
            <li class="nav-item">
                <span class="nav-link"
                      v-bind:class="{active : CurrentNavItemPicture === 'gray'}"
                      @click="setCurrentNavItemPicture('gray')"
                >Gray</span>
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

    export default {
        data: function () {

            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                CurrentNavItemPicture: 'original',
                picture1: 'background-color: #000',
                picture2: 'background-color: #000)',
                currentBoard: [],
            }
        },
        props: [
            'pictures',
            'routes'
        ],
        mounted() {
            this.refresh();
            let vue = this;
            setInterval(function () {
                vue.refresh();
            }, 100);
        },
        methods: {
            setCurrentNavItemPicture: function (type) {
                this.CurrentNavItemPicture = type;
                this.picture1 = 'background-image: url(' + this.pictures[type]['top'] + '?' + this.currentBoard.id + ')';
                this.picture2 = 'background-image: url(' + this.pictures[type]['bottom'] + '?' + this.currentBoard.id + ')';
            },
            refresh: function () {
                let vue = this;
                axios.post(vue.routes['get_board_current']).then(function (response) {
                    vue.currentBoard = response.data;
                    vue.picture1 = 'background-image: url(' + vue.pictures[vue.CurrentNavItemPicture]['top'] + '?' + vue.currentBoard.id + ')';
                    vue.picture2 = 'background-image: url(' + vue.pictures[vue.CurrentNavItemPicture]['bottom'] + '?' + vue.currentBoard.id + ')';
                });
            }
        }

    }
</script>