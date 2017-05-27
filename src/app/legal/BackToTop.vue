<template>
    <div id="back-to-top" v-show="show" :class="{dissolve: dissolve}"  @click="scrollTop">
        <span>r</span><span>e</span><span>t</span><span>o</span><span>u</span><span>r</span>
        <span>e</span><span>n</span>
        <span>h</span><span>a</span><span>u</span><span>t</span>
        <span>d</span><span>e</span>
        <span>p</span><span>a</span><span>g</span><span>e</span>
        <img src="./images/arrow.svg" alt=""/>
    </div>
</template>

<script>
    export default {
        name: "BackToTop",
        data: function() {
            return { 
                show: false,
                dissolve: false
            };
        },
        created() {
            window.onscroll = () => {
                this.dissolve = window.scrollY < window.innerHeight;
                this.show = this.show || !this.dissolve;
            }

            window.onscroll();
        },
        methods: {
            scrollTop: function () {
                if (!this.dissolve) {
                    window.scrollTo(0,0);
                }
            }
        }
    };
</script>