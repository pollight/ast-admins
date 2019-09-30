<template>
    <div class="table-responsive">
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Время снимка</th>
                <th scope="col" class="text-right text-nowrap">Ш×В×Т</th>
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
                    {{ item.Width }}x{{ item.Height }}x{{ item.Length*1000 }}
                </td>
                <td class="text-right text-capitalize">
                    {{ ((item.Width/1000)*(item.Height/1000)*item.Length).toFixed(3) }}
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
</template>

<script>

    export default {
        data: function () {

            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                databoards: [],
            }
        },
        props: [
            'routes'
        ],
        mounted() {

            this.refresh();
            let vue = this;
            setInterval(function() {
                vue.refresh();
            }, 100);
        },
        methods: {
            setCurrentNavItemPicture: function (type) {
                this.CurrentNavItemPicture = type;
                this.picture1 = 'background-image: url(' + this.pictures[type]['top'] + ')';
                this.picture2 = 'background-image: url(' + this.pictures[type]['bottom'] + ')';
            },
            refresh: function () {

                let vue = this;
                axios.post(vue.routes['get_data_boards']).then(function (response) {
                    vue.databoards = response.data;
                });
            },
        }
    }
</script>