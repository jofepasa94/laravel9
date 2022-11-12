<x-layouts.app title="Blog" meta-description='Home meta description'>
    <h1>Blog</h1>
    @foreach($posts as $post) {{
    $post['title']
}}
    @endforeach
</x-layouts.app>

