<template>
    <v-dialog max-width="600px">
        <!--<v-btn flat slot="activator" class="success">Add new project</v-btn>-->
        <v-icon small flat slot="activator" >edit</v-icon>
        <v-card>
            <v-card-title>
                <h2>Edit Feedback </h2>
            </v-card-title>
            <v-card-text>
              <v-container>
                <v-row>
                  <v-col cols="12" sm="6" md="4">
                    <v-text-field  label="Project No"></v-text-field>
                  </v-col>
                  <v-col cols="12" sm="6" md="4">
                    <v-text-field  label="Received Date"></v-text-field>
                  </v-col>
                  <v-col cols="12" sm="6" md="4">
                    <v-text-field label="Send Date"></v-text-field>
                  </v-col>
                  <v-col cols="12" sm="6" md="4">
                    <v-text-field  label="feedback"></v-text-field>
                  </v-col>
                  
                </v-row>
              </v-container>
            </v-card-text>
            <v-card-actions>
              <v-spacer></v-spacer>
              <v-btn color="blue darken-1" text @click="close">Cancel</v-btn>
              <v-btn color="blue darken-1" text @click="save">Save</v-btn>
            </v-card-actions>

        </v-card>
        </v-dialog>
</template>
<script>
export default {
    
}
</script>