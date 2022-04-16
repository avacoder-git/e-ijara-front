<template>
    <ul class="vuejs-countdown">
        <li v-if="days > 0">
            <p class="digit">{{ days | twoDigits }}</p>
            <hr class="g-brd-primary-opacity-0_5 my-2">
            <p class="text">{{ days > 1 ? 'кун' : 'кун' }}</p>
        </li>
        <li>
            <p class="digit">{{ hours | twoDigits }}</p>
            <hr class="g-brd-primary-opacity-0_5 my-2">

            <p class="text">{{ hours > 1 ? 'соат' : 'соат' }}</p>
        </li>
        <li>
            <p class="digit">{{ minutes | twoDigits }}</p>
            <hr class="g-brd-primary-opacity-0_5 my-2">
            <p class="text">мин</p>
        </li>
        <li>
            <p class="digit">{{ seconds | twoDigits }}</p>
            <hr class="g-brd-primary-opacity-0_5 my-2">
            <p class="text">сек</p>
        </li>
    </ul>
</template>

<script>
let interval = null;
export default {
    name: 'vuejsCountDown',
    props: {
        deadline: {
            type: String
        },
        end: {
            type: String
        },
        stop: {
            type: Boolean
        }
    },
    data() {
        return {
            now: Math.trunc((new Date()).getTime() / 1000),
            date: null,
            diff: 0
        }
    },
    mounted() {
        if (!this.deadline && !this.end) {
            throw new Error("Missing props 'deadline' or 'end'");
        }
        let endTime = this.deadline ? this.deadline : this.end;
        this.date = Math.trunc(Date.parse(endTime.replace(/-/g, "/")) / 1000);
        if (!this.date) {
            throw new Error("Invalid props value, correct the 'deadline' or 'end'");
        }
        interval = setInterval(() => {
            this.now = Math.trunc((new Date()).getTime() / 1000);
        }, 4);
    },
    computed: {
        seconds() {
            return Math.trunc(this.diff) % 60
        },
        minutes() {
            return Math.trunc(this.diff / 60) % 60
        },
        hours() {
            return Math.trunc(this.diff / 60 / 60) % 24
        },
        days() {
            return Math.trunc(this.diff / 60 / 60 / 24)
        }
    },
    watch: {
        now(value) {
            this.diff = this.date - this.now;
            if(this.diff <= 0 || this.stop){
                this.diff = 0;
                // Remove interval
                clearInterval(interval);
            }
        }
    },
    filters: {
        twoDigits(value) {
            if ( value.toString().length <= 1 ) {
                return '0'+value.toString()
            }
            return value.toString()
        }
    },
    destroyed() {
        clearInterval(interval);
    }
}
</script>
<style>
.vuejs-countdown {
    padding: 0;
    margin: 0;
}
.vuejs-countdown li {
    display: inline-block;
    margin: 0 8px;
    text-align: center;
    position: relative;
}
.vuejs-countdown li p {
    margin: 0;
}
.vuejs-countdown li:after {
    content: "";
    position: absolute;
    top: 0;
    right: -13px;
    font-size: 32px;
}
.vuejs-countdown li:first-of-type {
    margin-left: 0;
}
.vuejs-countdown li:last-of-type {
    margin-right: 0;
}
.vuejs-countdown li:last-of-type:after {
    content: "";
}
.vuejs-countdown .digit {
    font-size: 1.42857rem !important;
    font-weight: 700 !important;
    color: #4caf50 !important;
    line-height: 1 !important;
    text-transform: uppercase !important;
}
.vuejs-countdown .text {
    text-transform: uppercase;
    font-size: 0.85714rem !important;
    box-sizing: border-box;
    color: #4caf50 !important;
    line-height: 1 !important;
    text-transform: uppercase !important;
    text-align: center !important;
}
</style>
