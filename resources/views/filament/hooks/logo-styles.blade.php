<style>
    .welcome-card {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 2rem;
        overflow: hidden;
        padding: 1.75rem 2rem;
        border-radius: 1rem;
        background:
            radial-gradient(circle at 85% 135%, rgb(255 255 255 / 14%), transparent 15rem),
            linear-gradient(125deg, #211817, #5d100a 70%, #a90800);
        color: #fff;
        box-shadow: 0 14px 34px rgb(91 16 10 / 22%);
    }

    .welcome-eyebrow {
        color: #f5a49e;     
        font-size: .68rem;
        font-weight: 800;
        letter-spacing: .14em;
    }

    .welcome-copy h2 {
        margin: .35rem 0;
        font-size: 2.5rem;
        font-weight: 750;
        letter-spacing: -.035em;
    }

    .welcome-copy p {
        margin: 0;
        color: rgb(255 255 255 / 70%);
    }

    .welcome-mark {
        display: grid;
        flex: 0 0 auto;
        width: 5.5rem;
        height: 5.5rem;
        place-items: center;
        border: 1px solid rgb(255 255 255 / 18%);
        border-radius: 1.25rem;
        background: rgb(255 255 255 / 9%);
    }

    .welcome-mark img {
        width: 3.5rem;
        height: 3.5rem;
        filter: brightness(0) invert(1);
    }

    .fi-simple-header > .fi-logo {
        height: 7rem !important;
    }

    .fi-sidebar-header {
        padding-top: 2rem;
        padding-bottom: 0.5rem;
    }

    .fi-topbar {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }

    .fi-simple-main {
        margin: 16px;
    }

    @media (max-width: 700px) {
        .welcome-card { align-items: flex-start; flex-direction: column; padding: 1.5rem; }
    }
</style>
