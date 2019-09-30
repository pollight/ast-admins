<template>
    <div id="indicator-current-process" class="indicator-current-process">
        <div class="Planning">
            <div class="left">
                <span class="name">Планирование</span>
                <span class="count">{{ status }}%</span>
            </div>
            <div class="right">
                <svg width="9" height="12" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="3" height="12" fill="#FF5E0C"/>
                    <rect x="6" width="3" height="12" fill="#FF5E0C"/>
                </svg>

            </div>
        </div>
        <div class="progress-bar-planning mb-5">
            <span class="line" :style="{ width: status + '%' }"></span>
        </div>
    </div>
</template>

<script>

    export default {
        data: function () {

            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                status: 1,
            }
        },
        props: [
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
            refresh: function () {

                let vue = this;
                axios.post(vue.routes['get_status_planning']).then(function (response) {
                    vue.status = response.data;
                });
            }
        }
    }
</script>