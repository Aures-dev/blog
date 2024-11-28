<label for="title">Titre de l'article</label>
<input value="{{ old('title', isset($article->title) ? $article->title : null) }}" type="text" name="title" id="title"
    class="my-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
@error('title')
    <div> {{$message}} </div>
@enderror

<label for="body">Contenu de l'article</label>
<textarea name="body" id="body" cols="30" rows="10"
    class="my-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
    placeholder="Saisissez l'article ici ...">

    {{ old('body', isset($article->body) ? $article->body : null) }}

</textarea>
@error('body')
    <div> {{$message}} </div>
@enderror

<label for="image">Importez une image</label>
<input type="file" name="image" id="image"
    class="my-4 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
@error('image')
    <div> {{$message}} </div>
@enderror

<button type="submit"
    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
    Publier l'article
</button>