<template>
    <div class="form-wrapper">
      <transition name="swap" mode="out-in">
        <form v-if="!sent" key="form" @submit="submitForm">
          <input type="text" id="name" placeholder="Name" v-model="formData.name" required>

          <input type="email" id="email" placeholder="E-mail" v-model="formData.email" required>

          <input type="text" id="subject" placeholder="Subject" v-model="formData.subject" required>

          <textarea id="message" placeholder="Message" v-model="formData.message" required></textarea>

          <p v-if="error" class="form-error">Something went wrong. Please try again.</p>

          <Button type="submit" text="Send" />
        </form>

        <div v-else key="success" class="success">
          <div class="success-icon" aria-hidden="true">
            <svg viewBox="0 0 52 52">
              <circle cx="26" cy="26" r="24" fill="none" />
              <path fill="none" d="M14 27 l8 8 l16 -16" />
            </svg>
          </div>
          <h3>Thank you</h3>
          <p>We have successfully received your message and will be in touch shortly.</p>
          <button type="button" class="success-link" @click="resetForm">Send another message</button>
        </div>
      </transition>
    </div>
</template>
  
  <script>
  const FORMSUBMIT_ENDPOINT = 'https://formsubmit.co/ajax/contact@alexander-strategy.com';

  export default {
    data() {
      return {
        formData: {
          name: '',
          email: '',
          message: '',
          subject: ''
        },
        sent: false,
        error: false
      };
    },
    methods: {
      async submitForm(event) {
        event.preventDefault();
        this.error = false;

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
              _subject: `[Site ASG] ${this.formData.subject}`,
              _template: 'table',
              _replyto: this.formData.email,
            }),
          });

          if (!response.ok) {
            throw new Error(`HTTP ${response.status}`);
          }

          this.sent = true;
        } catch (error) {
          console.error(error);
          this.error = true;
        }
      },
      resetForm() {
        this.formData = { name: '', email: '', subject: '', message: '' };
        this.sent = false;
        this.error = false;
      }
    }
  };
  </script>
  
<style lang="scss" scoped>
.form-wrapper {
  position: relative;
}
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
.form-error {
  color: #ff8a8a;
  margin: 0 0 1.5vh;
  font-size: 14px;
}

.success {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  padding: 4vh 2vw;
  color: var(--color-text);
}
.success h3 {
  font-family: "Nexa";
  font-size: 26px;
  font-weight: 600;
  margin: 2.5vh 0 1vh;
}
.success p {
  font-family: "Nexa";
  font-size: 16px;
  line-height: 24px;
  opacity: 0.85;
  max-width: 380px;
  margin: 0;
}
.success-link {
  background: none;
  border: none;
  margin-top: 3vh;
  padding: 0;
  color: var(--color-text);
  font-family: "Nexa";
  font-size: 14px;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  cursor: pointer;
  border-bottom: 1px solid currentColor;
  padding-bottom: 4px;
  opacity: 0.7;
  transition: opacity 0.2s ease;
}
.success-link:hover {
  opacity: 1;
}

.success-icon {
  width: 72px;
  height: 72px;
}
.success-icon svg {
  width: 100%;
  height: 100%;
  overflow: visible;
}
.success-icon circle {
  stroke: currentColor;
  stroke-width: 2.5;
  stroke-dasharray: 166;
  stroke-dashoffset: 166;
  animation: draw-circle 0.6s ease-out forwards;
}
.success-icon path {
  stroke: currentColor;
  stroke-width: 3.5;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke-dasharray: 48;
  stroke-dashoffset: 48;
  animation: draw-check 0.35s 0.5s ease-out forwards;
}

@keyframes draw-circle {
  to { stroke-dashoffset: 0; }
}
@keyframes draw-check {
  to { stroke-dashoffset: 0; }
}

.swap-enter-active,
.swap-leave-active {
  transition: opacity 0.35s ease, transform 0.35s ease;
}
.swap-enter-from {
  opacity: 0;
  transform: translateY(8px);
}
.swap-leave-to {
  opacity: 0;
  transform: translateY(-8px);
}
</style>