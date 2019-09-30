<template>
    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <span class="nav-link"
                      v-bind:class="{active : CurrentNavItemPicture === 'original'}"
                      @click="setCurrentNavItemPicture('original')"
                >Список рецептов</span>
            </li>
            <li class="nav-item">
                <span class="nav-link"
                      v-bind:class="{active : CurrentNavItemPicture === 'x_Ray'}"
                      @click="setCurrentNavItemPicture('x_Ray')"
                >Изменение рецепта</span>
            </li>
        </ul>

        <div class="tab-content">
            <div class="table-responsive">
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Время снимка</th>
                        <th scope="col" class="text-right text-nowrap">Ш×В×Т, м</th>
                        <th scope="col" class="text-right text-nowrap">Объем, м3</th>
                        <th scope="col" class="text-center">Тип древесины</th>
                        <th scope="col" class="text-right">Сорт</th>
                        <th scope="col" class="text-right">Сучки</th>
                        <th scope="col" class="text-right">Трещины</th>
                        <th scope="col" class="text-right">Свилеватость</th>
                        <th scope="col" class="text-right">Прорость</th>
                        <th scope="col" class="text-right">Забольнь</th>
                        <th scope="col" class="text-right">Плесень</th>
                        <th scope="col" class="text-right">Гниль</th>
                        <th scope="col" class="text-right">Синева</th>
                        <th scope="col" class="text-right">Обзол</th>
                        <th scope="col" class="text-right">Механические повреждения</th>
                        <th scope="col" class="text-right">Пятна</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="item in databoards">
                        <td>
                            {{ item.id }}
                        </td>
                        <td class="text-nowrap">
                            {{ item.time }}
                        </td>
                        <td>
                            {{ item.Width }}x{{ item.Height }}x{{ item.Length }}
                        </td>
                        <td class="text-right text-capitalize">
                            {{ (item.Width*item.Width*item.Length).toFixed(2) }}
                        </td>
                        <td class="text-center text-capitalize">
                            {{ item.Type }}
                        </td>
                        <td class="text-right">
                            {{ item.Sort }}
                        </td>
                        <td class="text-right" :class="{status1 : item.Suchki}">
                            {{ item.Suchki }}
                        </td>
                        <td class="text-right" :class="{status2 : item.Treschiny}">
                            {{ item.Treschiny }}
                        </td>
                        <td class="text-right" :class="{status3 : item.Svievatist}">
                            {{ item.Svievatist }}
                        </td>
                        <td class="text-right">
                            {{ item.Prorost }}
                        </td>
                        <td class="text-right" :class="{status4 : item.Zabolon}">
                            {{ item.Zabolon }}
                        </td>
                        <td class="text-right">
                            {{ item.Plesen }}
                        </td>
                        <td class="text-right" :class="{status5 : item.Gnil}">
                            {{ item.Gnil }}
                        </td>
                        <td class="text-right" :class="{status6 : item.Sineva}">
                            {{ item.Sineva }}
                        </td>
                        <td class="text-right" :class="{status7 : item.Obzol}">
                            {{ item.Obzol }}
                        </td>
                        <td class="text-right">
                            {{ item.Mech }}
                        </td>
                        <td class="text-right">
                            {{ item.Piatna }}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
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
                    databoards: []
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
                axios.post(vue.routes['get_last_modified']).then(function (response) {
                    vue.lastModified = response.data;
                    vue.picture1 = 'background-image: url(' + vue.pictures[vue.CurrentNavItemPicture]['top'] + '?lastModified=' + vue.lastModified[vue.CurrentNavItemPicture]['top'] + ')';
                    vue.picture2 = 'background-image: url(' + vue.pictures[vue.CurrentNavItemPicture]['bottom'] + '?lastModified=' + vue.lastModified[vue.CurrentNavItemPicture]['bottom'] + ')';
                });
            }
        }

    }
</script>