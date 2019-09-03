<template>
    <div class="system-datetime-info">
        <span id="indicator" class="indicator"></span>
        <span class="system-datetime">
                                {{ date }},&nbsp;{{ time }}
                            </span>
        <svg width="13" height="13" viewBox="0 0 13 13" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <circle cx="6.5" cy="6.5" r="3" stroke="white"/>
            <path d="M6 0.5C6 0.223858 6.22386 0 6.5 0C6.77614 0 7 0.223858 7 0.5V1.5C7 1.77614 6.77614 2 6.5 2C6.22386 2 6 1.77614 6 1.5V0.5Z"
                  fill="white"/>
            <path d="M6 11.5C6 11.2239 6.22386 11 6.5 11C6.77614 11 7 11.2239 7 11.5V12.5C7 12.7761 6.77614 13 6.5 13C6.22386 13 6 12.7761 6 12.5V11.5Z"
                  fill="white"/>
            <path d="M1.90433 2.61088C1.70907 2.41562 1.70907 2.09903 1.90433 1.90377C2.0996 1.70851 2.41618 1.70851 2.61144 1.90377L3.31855 2.61088C3.51381 2.80614 3.51381 3.12272 3.31855 3.31798C3.12329 3.51325 2.8067 3.51325 2.61144 3.31798L1.90433 2.61088Z"
                  fill="white"/>
            <path d="M9.68251 10.3891C9.48725 10.1938 9.48725 9.87721 9.68251 9.68195C9.87777 9.48668 10.1944 9.48668 10.3896 9.68195L11.0967 10.3891C11.292 10.5843 11.292 10.9009 11.0967 11.0962C10.9015 11.2914 10.5849 11.2914 10.3896 11.0962L9.68251 10.3891Z"
                  fill="white"/>
            <path d="M10.3886 1.90385C10.5839 1.70858 10.9005 1.70858 11.0957 1.90385C11.291 2.09911 11.291 2.41569 11.0957 2.61095L10.3886 3.31806C10.1934 3.51332 9.87679 3.51332 9.68153 3.31806C9.48627 3.1228 9.48627 2.80622 9.68153 2.61095L10.3886 1.90385Z"
                  fill="white"/>
            <path d="M2.61046 9.68202C2.80572 9.48676 3.1223 9.48676 3.31757 9.68202C3.51283 9.87728 3.51283 10.1939 3.31757 10.3891L2.61046 11.0962C2.4152 11.2915 2.09862 11.2915 1.90335 11.0962C1.70809 10.901 1.70809 10.5844 1.90335 10.3891L2.61046 9.68202Z"
                  fill="white"/>
            <path d="M12.5 6C12.7761 6 13 6.22386 13 6.5C13 6.77614 12.7761 7 12.5 7L11.5 7C11.2239 7 11 6.77614 11 6.5C11 6.22386 11.2239 6 11.5 6L12.5 6Z"
                  fill="white"/>
            <path d="M1.5 6C1.77614 6 2 6.22386 2 6.5C2 6.77614 1.77614 7 1.5 7L0.5 7C0.223858 7 -3.39263e-08 6.77614 -2.18557e-08 6.5C-9.78513e-09 6.22386 0.223858 6 0.5 6L1.5 6Z"
                  fill="white"/>
        </svg>

    </div>
</template>

<script>

    export default {
        data: function () {

            return {
                date: '',
                time: '',
            }
        },
        mounted() {
            let vue = this;
            vue.updateTime();
            setInterval(function () {
                vue.updateTime();
            }, 1000);
        },
        methods: {
            updateTime: function () {
                let month = [
                    'января',
                    'февраля',
                    'марта',
                    'апреля',
                    'мая',
                    'июня',
                    'июля',
                    'августа',
                    'сентября',
                    'октября',
                    'ноября',
                    'декабря',
                ];
                // let cd = new Date().toLocaleString('ru-RU', {timeZone: "Europe/Minsk"});
                let cd = new Date().toLocaleString('en-us', {timeZone: "Europe/Minsk"});
                cd = new Date(cd);

                this.time = this.zeroPadding(cd.getHours(), 2) + ':' + this.zeroPadding(cd.getMinutes(), 2) + ':' + this.zeroPadding(cd.getSeconds(), 2);
                this.date =  this.zeroPadding(cd.getDate(), 2) + ' ' + month[cd.getMonth()] + ' ' + this.zeroPadding(cd.getFullYear(), 4);
            },
            zeroPadding: function(num, digit) {
                let zero = '';
                for(var i = 0; i < digit; i++) {
                    zero += '0';
                }
                return (zero + num).slice(-digit);
            }
        }
    }
</script>