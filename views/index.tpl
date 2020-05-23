<style>{include "../static/css/style.css"}</style>
<form action="/books" method="POST">
    <div class="addBook">
        <div class="form">
            <h2>Добавление автора</h2>
            <input type="text" name="name" placeholder="Название книги"></br>
            <input type="text" name="author" placeholder="Автор"></br>
            <button class="btn">Создать</button>
        </div>

    </div>

</form>


<div class="txt">
    <ul class="listBooks">
        {foreach $books as $book}
            <li >{$book->author}, "{$book->name}"
            <form action="/books/delete/{$book->id}" method="POST">
                <button class="btn_del_book">Delete</button>
            </form>

            </li>
        {/foreach}
    </ul>
</div>


