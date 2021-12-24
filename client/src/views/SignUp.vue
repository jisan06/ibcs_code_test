<template>
    <div class="page-sign-up">
        <div class="columns">
            <div class="column is-4 is-offset-4">
                <h1 class="title">Sign Up</h1>

                <form @submit.prevent="submitForm">
                    <div class="field">
                        <label>Name</label>
                        <div class="control">
                            <input type="text" class="input" v-model="name">
                        </div>
                    </div>
                    <div class="field">
                        <label>Email Address</label>
                        <div class="control">
                            <input type="email" class="input" v-model="email">
                        </div>
                    </div>

                    <div class="field">
                        <label>Password</label>
                        <div class="control">
                            <input type="password" class="input" v-model="password">
                        </div>
                    </div>

                    <div class="field">
                        <label>Password Confirm</label>
                        <div class="control">
                            <input type="password" class="input" v-model="password2">
                        </div>
                    </div>

                    <div class="notification is-danger" v-if="errors.length">
                        <p v-for="error in errors" v-bind:key="error">{{ error }}</p>
                    </div>

                    <div class="field">
                        <div class="control">
                           <button class="button is-dark">Sign up</button>
                        </div>
                    </div>

                    <hr>
                    Or <router-link to="/log-in">click here </router-link> to log in!

                </form>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import { toast } from 'bulma-toast'

export default {
    name: 'SignUp',
    data() {
        return {
            errors: [],
            name: '',
            email: '',
            password: '',
            password2: ''
        }
    },
    methods: {
        
        submitForm() {
            
            this.errors = [];
            console.log(this.errors)


            if(this.name === '') {
                this.errors.push('The name field is reauired')
            }

            if(this.email === '') {
                this.errors.push('The email address field is reauired')
            }

            if(this.password === '') {
                this.errors.push('The password field is reauired')
            }

            if(this.password !== this.password2 ) {
                this.errors.push('The password did\'t mathch')
            }

            if(!this.errors.length) {
                console.log('no errors')
                const formData = {
                    name: this.name,
                    email: this.email,
                    password: this.password,
                    password_confirmation: this.password2
                }

                axios
                .post("api/user/registration", formData, {
                  headers: {
                    'Access-Control-Allow-Origin' : '*',
                    'Access-Control-Allow-Methods':'GET,PUT,POST,DELETE,PATCH,OPTIONS',
                  }
                })
                .then(response => {
                    toast({
                        message: 'Account created, please log in',
                        type: 'is-success',
                        dismissible: true,
                        duration: 2000,
                        position: 'bottom-right'
                    })

                    this.$router.push('/log-in')
                })
                .catch(error => {
                    if(error.response) {
                        for(const property in error.response.data) {
                            this.errors.push(`${property}: ${error.response.data[property]}`)
                        }
                        console.log(JSON.stringify(error.response.data))
                    } else if (error.message) {
                        this.errors.push('Something went wrong. Please try again')
                        
                        console.log(JSON.stringify(error))
                    }
                })
            }
        }
    }
}
</script>