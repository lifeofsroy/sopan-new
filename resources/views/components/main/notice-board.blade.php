<style>
    #scroll-container {
        border: 3px solid #5d5c5c1f;
        border-radius: 5px;
        height: 300px;
        overflow: hidden;
    }

    .scroll-text {
        height: 100%;
        text-align: center;

        /* animation properties */
        -moz-transform: translateY(50%);
        -webkit-transform: translateY(50%);
        transform: translateY(50%);

        -moz-animation: my-animation 5s linear infinite;
        -webkit-animation: my-animation 5s linear infinite;
        animation: my-animation 15s linear infinite;
    }

    /* for Firefox */
    @-moz-keyframes my-animation {
        from {
            -moz-transform: translateY(100%);
        }

        to {
            -moz-transform: translateY(-100%);
        }
    }

    /* for Chrome */
    @-webkit-keyframes my-animation {
        from {
            -webkit-transform: translateY(100%);
        }

        to {
            -webkit-transform: translateY(-100%);
        }
    }

    @keyframes my-animation {
        from {
            -moz-transform: translateY(100%);
            -webkit-transform: translateY(100%);
            transform: translateY(100%);
        }

        to {
            -moz-transform: translateY(-100%);
            -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
        }
    }

    .main-text {
        color: #02ad9f;
        padding: 0 50px;
        font-size: 18px;
        margin-bottom: 20px;
    }

    .main-text:hover {
        color: #0dc507;
    }

    .scroll-text:hover {
        animation-play-state: paused;
    }

    
</style>

<div class="section-title text-left">
    <span class="section-title__tagline">Recently asked questions</span>
    <h2 class="section-title__title">Read Upcoming Events</h2>
</div>

<div id="scroll-container">
    <div class="scroll-text">
        <a href="#">
            <p class="main-text">This is scrolling text 1 This is scrolling text 1 This is scrolling text 1 This is scrolling text 1</p>
        </a>
        <a href="#">
            <p class="main-text">This is scrolling text 1 This is scrolling text 1 This is scrolling text 1 This is scrolling text 1</p>
        </a>
        <a href="#">
            <p class="main-text">This is scrolling text 1 This is scrolling text 1 This is scrolling text 1 This is scrolling text 1</p>
        </a>
        <a href="#">
            <p class="main-text">This is scrolling text 1 This is scrolling text 1 This is scrolling text 1 This is scrolling text 1</p>
        </a>
        <a href="#">
            <p class="main-text">This is scrolling text 1 This is scrolling text 1 This is scrolling text 1 This is scrolling text 1</p>
        </a>
    </div>
</div>
