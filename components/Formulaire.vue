<template>
    <div>
      <form @submit="submitForm">
        <input type="text" id="name" placeholder="Name" v-model="formData.name" required>
  
        <input type="email" id="email" placeholder="E-mail" v-model="formData.email" required>

        <input type="text" id="subject" placeholder="Subject" v-model="formData.subject" required>
  
        <textarea id="message" placeholder="Message" v-model="formData.message" required></textarea>
  
        <Button type="submit" text="Send" />
      </form>
    </div>
</template>
  
  <script>
  const FORMSUBMIT_ENDPOINT = 'https://formsubmit.co/ajax/novadigital.contact@gmail.com';

  export default {
    data() {
      return {
        formData: {
          name: '',
          email: '',
          message: '',
          subject: ''
        }
      };
    },
    methods: {
      async submitForm(event) {
        event.preventDefault();

        try {
          const response = await fetch(FORMSUBMIT_ENDPOINT, {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              Accept: 'application/json',
            },
            body: JSON.stringify({
              name: this.formData.name,
              email: this.formData.email,
              subject: this.formData.subject,
              message: this.formData.message,
              _subject: `Contact ASG: ${this.formData.subject}`,
              _template: 'table',
              _replyto: this.formData.email,
            }),
          });

          if (!response.ok) {
            throw new Error(`HTTP ${response.status}`);
          }

          alert('Message envoyé avec succès !');
          this.formData = {
            name: '',
            email: '',
            subject: '',
            message: ''
          };
        } catch (error) {
          console.error(error);
          alert('Une erreur s\'est produite lors de l\'envoi du message.');
        }
      }
    }
  };
  </script>
  
<style lang="scss" scoped>
form {
  display: flex;
  flex-direction: column;
}
form input {
  border: none;
  background-color: rgba(82, 93, 103, 0.427);
  padding: 20px 30px;
  width: 100%;
  border-radius: 10px;
  margin: 1vh 0;
  font-size: 16px;
  font-weight: 400;
  line-height: 22px;
  outline: none;
  color: var(--color-text);
  font-family: "Nexa";
}
form textarea {
  border: none;
  background-color: rgba(82, 93, 103, 0.427);
  padding: 20px 30px;
  width: 100%;
  border-radius: 10px;
  margin: 1vh 0 4vh 0;
  outline: none;
  color: var(--color-text);
  font-family: "Nexa";
  font-size: 16px;
  font-weight: 400;
  line-height: 22px;
}
</style>