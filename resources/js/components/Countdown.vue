
<script>
import CountDown from 'countdown-vue'
let interval = null;

export default {
    components: {CountDown},
    name: 'CountDown',
    props: {
        end: {
            type: String
        },
        stop: {
            type: Boolean,
            default: false
        },
        showDays: {
            type: Boolean,
            default: false
        },
        showHours: {
            type: Boolean,
            default: false
        },
        showMinutes: {
            type: Boolean,
            default: false
        },
        showSeconds: {
            type: Boolean,
            default: false
        },
        endFunction: {
            type: Function,
            default: () => { console.log("Goodbye and thanks for all the fish.") }
        }
    },
    data() {
        return {
            now: Math.trunc((new Date()).getTime() / 1000),
            date: null,
            diff: 0
        }
    },
    created() {
        if (!this.end) {
            throw new Error("Missing props 'end'");
        }

        let endTime = this.end;
        let parsed = Date.parse(endTime);

        if(parsed) {
            this.date = Math.trunc( parsed / 1000);
        }
        else {
            throw new Error("Invalid props value, correct the 'end'");
        }

        interval = setInterval(() => {
            this.now = Math.trunc((new Date()).getTime() / 1000);
        }, 1000);
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
                this.endFunction();
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
  content: ":";
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
  font-size: 32px;
  font-weight: 600;
  line-height: 1.4;
  margin-bottom: 0;
}
.vuejs-countdown .text {
  text-transform: uppercase;
  margin-bottom: 0;
  font-size: 10px;
}
</style>
