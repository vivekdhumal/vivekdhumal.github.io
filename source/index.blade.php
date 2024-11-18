@extends('_layouts.main')

@section('body')
<header class="bg-blue-600 text-white py-12">
    <div class="container mx-auto text-center">
        <h1 class="text-4xl font-bold">Hello, I'm Vivek V. Dhumal</h1>
        <p class="mt-4 text-xl">Crafting scalable web and mobile solutions for over 12 years.</p>
        <div class="mt-6 space-x-4">
            <a href="#portfolio" class="bg-white text-blue-600 px-6 py-2 rounded font-semibold">View My Portfolio</a>
            <a href="mailto:dhumal.vivek02@gmail.com" class="bg-transparent border border-white px-6 py-2 rounded">Contact Me</a>
        </div>
    </div>
</header>

<!-- About Section -->
<section id="about" class="py-16 bg-white">
<div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold mb-6">About Me</h2>
    <p class="text-lg leading-relaxed max-w-2xl mx-auto">
    I'm a full-stack developer with expertise in Laravel, CodeIgniter, Vue.js, and Android (Java). 
    I specialize in creating efficient, scalable solutions and have a passion for problem-solving in web and mobile development.
    </p>
</div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-16 bg-gray-100">
<div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold mb-6">My Expertise</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
    <div class="p-6 bg-white shadow rounded">
        <h3 class="text-xl font-semibold">Backend</h3>
        <p class="mt-2">Laravel, CodeIgniter, PHP, Node Js</p>
    </div>
    <div class="p-6 bg-white shadow rounded">
        <h3 class="text-xl font-semibold">Frontend</h3>
        <p class="mt-2">Vue.js, HTML5, CSS3, JavaScript, Next.js</p>
    </div>
    <div class="p-6 bg-white shadow rounded">
        <h3 class="text-xl font-semibold">Mobile Development</h3>
        <p class="mt-2">Android (Java)</p>
    </div>
    <div class="p-6 bg-white shadow rounded">
        <h3 class="text-xl font-semibold">Other Tools</h3>
        <p class="mt-2">Git, MySQL, PostgreSQL, Mongo DB, REST APIs</p>
    </div>
    </div>
</div>
</section>

<!-- Projects Section -->
<section id="portfolio" class="py-16 bg-white">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6">Featured Projects</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Project Card -->
        <div class="p-6 bg-gray-100 shadow rounded">
            <h3 class="text-xl font-semibold">Vhost-Manager</h3>
            <p class="mt-2 text-gray-600">Command line application for virtual host manager for Wamp, Xampp and Mamp</p>
            <p class="mt-2 text-sm text-gray-500">Technologies: PHP Symfony Console</p>
            <a href="https://github.com/vivekdhumal/Vhost-Manager/tree/master" class="mt-4 inline-block text-blue-600">View on GitHub</a>
        </div>
        <!-- Add more project cards as needed -->
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-blue-600 text-white py-6 text-center">
<p>© Vivek V. Dhumal, 2024.</p>
</footer>
@endsection
