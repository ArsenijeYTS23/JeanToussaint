<template>
    <div>
    <app-menu></app-menu>
    <router-view></router-view>
    <!-- <app-footer></app-footer> -->




    </div>
</template>

<script>





import Menu from './PageComponents/Menu';
import Home from './PageComponents/Home';
import Bio from './PageComponents/Bio';
import Disc from './PageComponents/Discography';
import Gigs from './PageComponents/Gigs';
import Media from './PageComponents/Media';
import Reviews from './PageComponents/Reviews';
import Footer from './PageComponents/Footer';
import Contact from './PageComponents/Contact';
    export default {
      components:{
        'app-menu':Menu,
        'app-home':Home,
        'app-bio':Bio,
        'app-disc':Disc,
        'app-gigs':Gigs,
        'app-media':Media,
        'app-revs':Reviews,
        'app-footer':Footer,
        'app-contact':Contact

      },

    }
</script>
