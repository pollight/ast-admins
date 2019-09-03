<template>
    <table>
        <tbody>
        <tr>
            <td class="coll-first">Номер</td>
            <td class="coll-second">{{ currentBoard.id }}</td>
        </tr>
        <tr>
            <td class="coll-first">Рецепт</td>
            <td class="coll-second">Для себя</td>
        </tr>
        <tr>
            <td class="coll-first">Сорт</td>
            <td class="coll-second">{{ currentBoard.Sort }} сорт</td>
        </tr>
        <tr>
            <td class="coll-first">Размер</td>
            <td class="coll-second">{{ currentBoard.Width }}x{{ currentBoard.Height }}x{{ currentBoard.Length }} м</td>
        </tr>
        <tr>
            <td class="coll-first">Пороки</td>
            <td class="coll-second">0 шт.</td>
        </tr>
        </tbody>
    </table>
</template>

<script>

    export default {
        data: function () {

            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                currentBoard: [],
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
            }, 5000);
        },
        methods: {
            refresh: function () {

                let vue = this;
                axios.post(vue.routes['get_board_current']).then(function (response) {
                    vue.currentBoard = response.data;
                });
            },
        }
    }
</script>