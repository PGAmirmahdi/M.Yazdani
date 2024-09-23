<style>
    .plyr__video-embed video {
        max-width: fit-content; /* ویدیوها به اندازه حداکثر عرض پدرشان تنظیم می‌شوند */
        max-height: 100vh; /* ارتفاع به صورت خودکار تنظیم می‌شود */
        margin:auto;
    }
    .pagination-wrapper {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
    }

    .pagination li {

        margin: 0 5px;
    }

    .pagination li a {
        display: inline-block;
        padding: 8px 16px;
        border: 1px solid #007bff;
        border-radius: 4px;
        text-decoration: none;
        color: #007bff;
        font-size: 14px;
    }

    .pagination li a:hover {
        background-color: #007bff;
        color:#fff;
    }

    .pagination li.active a {
        background-color: #007bff;
        color: white;
        border-color: rgba(255, 255, 255, 0.18);
        box-shadow:0px 2px 5px 0px #333;
    }

    .pagination li.disabled span {
        color: #ccc;
        padding: 8px 16px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
</style>
