<style>
  .login-theme-decoration {
    display: block;
    width: fit-content;
    margin: -1rem auto 0.5rem;
    font-size: 2.5rem;
    line-height: 1;
    animation: login-theme-decoration-bob 2.4s ease-in-out infinite;
    transform-origin: center bottom;
  }

  .login-theme-decoration--interactive:hover {
    animation: login-theme-decoration-wiggle 450ms ease-in-out;
  }

  .login-theme-message {
    margin: 0 auto 1rem;
    max-width: 30rem;
    text-align: center;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #4b5563;
  }

  @keyframes login-theme-decoration-bob {
    0%,
    100% {
      transform: translateY(0) rotate(-5deg);
    }

    50% {
      transform: translateY(-8px) rotate(5deg);
    }
  }

  @keyframes login-theme-decoration-wiggle {
    0%,
    100% {
      transform: rotate(0) scale(1);
    }

    25% {
      transform: rotate(-14deg) scale(1.15);
    }

    75% {
      transform: rotate(14deg) scale(1.15);
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .login-theme-decoration,
    .login-theme-decoration--interactive:hover {
      animation: none;
    }
  }
</style>
