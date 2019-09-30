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
                      v-bind:class="{active : CurrentNavItemPicture === 'x_Ray'}"
                      @click="setCurrentNavItemPicture('x_Ray')"
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
                lastModified: {
                    original: {
                        'top': null,
                        'bottom': null,
                    },
                    x_Ray: {
                        'top': null,
                        'bottom': null,
                    },
                    gray: {
                        'top': null,
                        'bottom': null,
                    },
                },
            }
        },
        props: [
            'pictures',
            'routes',
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
                this.picture1 = 'background-image: url(' + this.pictures[type]['top'] + '?lastModified=' + this.lastModified[this.CurrentNavItemPicture]['top'] + ')';
                this.picture2 = 'background-image: url(' + this.pictures[type]['bottom'] + '?lastModified=' + this.lastModified[this.CurrentNavItemPicture]['bottom'] + ')';
            },
            refresh: function () {

                let vue = this;
//<<<<<<< HEAD
                let rnd = Math.random();
                axios.post(vue.routes['get_board_current']).then(function (response) {
                    vue.currentBoard = response.data;
                   // console.log(response.data);
                    vue.picture1 = 'background-image: url(' + vue.pictures[vue.CurrentNavItemPicture]['top'] + '?' + vue.currentBoard.imgUpdT + '?' + vue.currentBoard.imgSizeT + ')';
                    //vue.picture2 = 'background-image: url(' + vue.pictures[vue.CurrentNavItemPicture]['bottom'] + '?' + vue.currentBoard.id + ')';
                    vue.picture2 = 'background-image: url(' + vue.pictures[vue.CurrentNavItemPicture]['bottom'] + '?' + vue.currentBoard.imgUpdB + '?' + vue.currentBoard.imgSizeB + ')';
//=======
//                axios.post(vue.routes['get_last_modified']).then(function (response) {
//                    vue.lastModified = response.data;
//                    console.log(vue.lastModified);
//                    vue.picture1 = 'background-image: url(' + vue.pictures[vue.CurrentNavItemPicture]['top'] + '?lastModified=' + vue.lastModified[vue.CurrentNavItemPicture]['top'] + ')';
 //                   vue.picture2 = 'background-image: url(' + vue.pictures[vue.CurrentNavItemPicture]['bottom'] + '?lastModified=' + vue.lastModified[vue.CurrentNavItemPicture]['bottom'] + ')';
//>>>>>>> 2e032547f7fbb0ab6bb280ab353cb845383d32ea
                });
            }
        }

    }
</script>