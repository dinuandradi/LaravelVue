<template>
  <!-- Footer -->
  <mdb-footer color="unique-color-dark" class="page-footer font-small pt-0">
    <div style="backgroundColor: #6351ce">
      <mdb-container class="text-left">
        <mdb-row class="py-4 d-flex align-items-center">
          <mdb-col md="6" lg="5" class="text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0 white-text">Get connected with us on social networks!</h6>
          </mdb-col>
          <mdb-col md="6" lg="7" class="text-center text-md-right">
            <a class="fb-ic ml-0">
              <i class="fab fa-facebook white-text mr-lg-4"></i>
            </a>
            <a class="tw-ic">
              <i class="fab fa-twitter white-text mr-lg-4"></i>
            </a>
            <a class="gplus-ic">
              <i class="fab fa-google-plus white-text mr-lg-4"></i>
            </a>
            <a class="li-ic">
              <i class="fab fa-linkedin-in white-text mr-lg-4"></i>
            </a>
            <a class="ins-ic">
              <i class="fab fa-instagram white-text mr-lg-4"></i>
            </a>
          </mdb-col>
        </mdb-row>
      </mdb-container>
    </div>
    <mdb-container class="mt-5 mb-4 text-center text-md-left">
      <mdb-row class="mt-3">
        <mdb-col md="3" lg="4" xl="3" class="mb-4">
          <h6 class="text-uppercase font-weight-bold">
            <strong>About Us</strong>
          </h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px" />
          <p>
            Elastomeric Engineering Company Ltd is a subsidiary of HEXPOL A.B which is listed on the Stockholm stock exchange. We are a Multi Million Dollar Company and employ approximately 1,000 employees in multiple facilities.
          </p>
        </mdb-col>
        <mdb-col md="3" lg="2" xl="2" class="mb-4">
          <h6 class="text-uppercase font-weight-bold">
            <strong>Useful links</strong>
          </h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px" />
        
            <v-list-item 
              v-for="link in abouts"
              :key="link.text"
              router
              :to="link.route"
            ><p class="text-justify" >{{link.text}}</p></v-list-item>
          
        </mdb-col>
        <mdb-col md="4" lg="3" xl="3" class="mb-4">
          <h6 class="text-uppercase font-weight-bold">
            <strong>Contact</strong>
          </h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px" />
          <p>
            <i class="fas fa-home mr-3"></i> 371, Rd Colombo - Horana Rd, Piliyandala
          </p>
          <p>
            <i class="fas fa-envelope mr-3"></i> elasto@example.com
          </p>
          <p>
            <i class="fas fa-phone mr-3"></i> 0114 212 722
          </p>
        </mdb-col>
      </mdb-row>
    </mdb-container>
    <div class="footer-copyright text-center py-3">
      <mdb-container fluid>
        &copy; 2018 Copyright:
        <a href="https://www.MDBootstrap.com">MDBootstrap.com</a>
      </mdb-container>
    </div>
  </mdb-footer>
  <!-- Footer -->
</template>


<script>
import { mdbFooter, mdbContainer, mdbRow, mdbCol } from "mdbvue";

export default {
  components: {
    mdbFooter,
    mdbContainer,
    mdbRow,
    mdbCol
  },
  data() {
    return {
      abouts:[
        {text: "The Company", route:"./AboutUs"},
        {text: "Partners", route:"./AboutUs"},
        {text: "Careers", route:"./AboutUs"}
      ]
    };
  }
};
</script>