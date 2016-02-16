<footer class="footer">
    <div class="container-fluid">
        <div class="footer-content">
            <ul>
                <li>
                    <p>{{ trans('footer.brand') }}</p>
                </li>
                <li>
                    <a href="{{ action('PageController@contact') }}">{{ trans('footer.contact') }}</a>
                </li>
                <li>
                    <a href="{{ action('PageController@terms') }}">{{ trans('footer.terms') }}</a>
                </li>
            </ul>
        </div>
    </div>
</footer>