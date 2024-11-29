<style>
    .flex-container {
        display: flex;
        gap: 20px;
    }

    .flex-container>div {
        flex: 1;
    }

    .uk-input,
    select {
        background: #e8eeef;
        border: 1px solid #ccc;
        padding: 12px;
        font-size: 16px;
        border-radius: 5px;
        width: 100%;
        color: #384047;
        box-sizing: border-box;
    }

    select:focus {
        border-color: #4bc970;
        outline: none;
    }

    .uk-input:focus {
        border-color: #4bc970;
        outline: none;
    }

    textarea {
        background: #e8eeef;
        border: 1px solid #ccc;
        padding: 12px;
        font-size: 16px;
        border-radius: 5px;
        width: 100%;
        margin-bottom: 20px;
        color: #384047;
        resize: vertical;
        box-sizing: border-box;
        transition: border-color 0.3s ease;
    }

    textarea:focus {
        border-color: #4bc970;
        outline: none;
    }

    .TITULO {
        font-family: 'Jura', sans-serif;
        font-size: 2.9em;
        text-align: center;
        color: #384047;
        margin-bottom: 20px;
    }

    body {
        font-family: 'Nunito', sans-serif;
        background-color: #f4f7f8;
        color: #384047;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
    }

    #wrapper {
        display: flex;
        justify-content: flex-start;
        flex-direction: row;
        width: 100%;
    }

    #sidebar-wrapper {
        width: 250px;
        background: #333;
        color: #fff;
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        overflow-y: auto;
        transition: all 0.3s ease;
        padding-top: 20px;
    }

    #sidebar-wrapper ul {
        list-style: none;
        padding: 0;
    }

    #sidebar-wrapper ul li {
        padding: 15px;
    }

    #sidebar-wrapper ul li a {
        color: #fff;
        text-decoration: none;
        font-size: 18px;
    }

    #sidebar-wrapper ul li a:hover {
        color: #4bc970;
        background: rgba(255, 255, 255, 0.2);
        border-left: 3px solid #4bc970;
    }

    #page-content-wrapper {
        margin-left: 250px;
        width: 100%;
        padding: 20px;
        transition: margin-left 0.3s ease;
    }

    .form-container {
        display: flex;
        gap: 20px;
        justify-content: space-evenly;
        flex-wrap: wrap;
    }

    form {
        flex: 1;
        max-width: 100%;
        margin: 10px;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-sizing: border-box;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    input,
    select {
        background: #e8eeef;
        border: 1px solid #ccc;
        padding: 12px;
        font-size: 16px;
        border-radius: 5px;
        width: 100%;
        margin-bottom: 20px;
        color: #384047;
    }

    button {
        padding: 12px 20px;
        color: #fff;
        background-color: #4bc970;
        font-size: 16px;
        text-align: center;
        border-radius: 5px;
        width: 100%;
        border: 1px solid #4bc970;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    button:hover {
        background-color: #3ac162;
        transform: scale(1.02);
    }

    .modal-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 999;
        padding: 0 20px;
    }

    .cadastro-box {
        background: #fff;
        border-radius: 10px;
        width: 100%;
        max-width: 1000px;
        padding: 30px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    }

    @media (max-width: 768px) {
        #sidebar-wrapper {
            width: 0;
        }

        #page-content-wrapper {
            margin-left: 0;
            padding: 10px;
        }

        .form-container {
            flex-direction: column;
            align-items: stretch;
        }

        .cadastro-box {
            width: 90%;
            max-width: 100%;
        }

        .uk-input,
        select {
            font-size: 14px;
        }
    }
</style>