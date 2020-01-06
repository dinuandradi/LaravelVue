<template>
    <v-app class="grey lighten-2">
        <div class="back">
            <v-container
            class="mx-5 my-5">
            
            <v-sheet
            class="px-5"
            :elevation="10"
            color="blue-grey lighten-3"
            height="500"
            width="500"
            >
            
            <v-form>
                <v-container>
                    <h4>SignUp</h4>
                    
                    <v-row>

                        <v-col cols="12" sm="6">
                            <v-text-field
                                v-model="first"
                                label="First Name"
                                outlined
                            ></v-text-field>
                        </v-col>

                        <v-col cols="12" sm="6">
                        <v-text-field
                            v-model="last"
                            label="Last Name"
                            outlined
                        ></v-text-field>
                        </v-col>

                        <v-col cols="12" sm="6">
                        <v-text-field
                            v-model="mail"
                            lable="Email"
                            outlined
                        ></v-text-field>
                        </v-col>

                        <v-col cols="12" sm="6">
                        <v-text-field
                            :append-icon="show3 ? 'visibility' : 'visibility_off'"
                            :rules="[rules.required, rules.min]"
                            :type="show3 ? 'text' : 'password'"
                            name="input-10-2"
                            label="Password"
                            hint="At least 8 characters"
                            value="wqfasds"
                            class="input-group--focused"
                            @click:append="show3 = !show3"
                        ></v-text-field>
                        </v-col>    

                    </v-row>

                    <v-btn class="success mx-5 mt-3">SignUp</v-btn>

                </v-container>
            </v-form>    

            </v-sheet>

            </v-container>
        </div>
    </v-app>  
</template>

<script>
  export default {
    data: () => ({
      first: '',
      last: '',
      mail: '',
      
        show1: false,
        show2: true,
        show3: false,
        show4: false,
        password: 'Password',
        rules: {
          required: value => !!value || 'Required.',
          min: v => v.length >= 8 || 'Min 8 characters',
          emailMatch: () => ('The email and password you entered don\'t match'),
        }
    }),
  }
</script>

<style>

</style>