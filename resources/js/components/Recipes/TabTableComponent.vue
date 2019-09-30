<template>
    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <span class="nav-link"
                >Список рецептов</span>
            </li>
            <li class="nav-item">
                <span class="nav-link"
                >Изменение рецепта</span>
            </li>
        </ul>

        <div class="tab-content">
            <div class="table-responsive">
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Имя рецепта</th>
                        <th scope="col">Используемый ГОСТ</th>
                        <th scope="col">Автор</th>
                        <th scope="col">Дата добавления</th>
                        <th scope="col">Установлен</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(i, index) in recipes"
                        @click="onActiveRow(i.id)"
                        v-bind:class="{ active: currentID === i.id }"
                    >
                        <td>{{ ++index }}</td>
                        <td>{{ i.Name }}</td>
                        <td>Используемый ГОСТ</td>
                        <td>{{ i.user_name }}</td>
                        <td>{{ i.updated }}</td>
                        <td>{{ i.used_label }}</td>
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
                recipes: [],
                currentID: 0,
            }
        },
        props: [
            'routes',
        ],
        mounted() {
            this.refresh();
            let vue = this;
            setInterval(function() {
                vue.refresh();
            }, 100);
        },
        methods: {
            refresh: function () {

                let vue = this;
                axios.get(vue.routes['get_recipes_list']).then(function (response) {
                    vue.recipes = response.data;
                });
            },
            onActiveRow: function (id) {
                this.currentID = id;
                this.$emit('currentID', this.currentID);
            }
        }
    }
</script>

<style scoped>
    .table tr::before {
        display: none;
    }
</style>