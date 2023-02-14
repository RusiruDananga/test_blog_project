<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <title>Inline editing enabled by code</title>
    <script src="https://cdn.ckeditor.com/4.20.1/standard-all/ckeditor.js"></script>
</head>

<body>
    <div id="introduction">
        <h1>Inline Editor <a class="documentation"
                href="https://ckeditor.com/docs/ckeditor4/latest/guide/dev_inline.html">Documentation</a></h1>

        <p>
            <strong>Inline Editing</strong> allows you to edit any element on the page in-place. Inline editor provides
            a real <abbr title="What You See is What You Get">WYSIWYG</abbr> experience "out of the box", because unlike
            in <a href="./classic.html">classic editor</a>, there is no <code>&lt;iframe&gt;</code> element surrounding
            the editing area. The CSS styles used for editor content are exactly the same as on the target page where
            this content is rendered!
        </p>

        <h2 class="editor-title">Inline Editing Enabled by Code</h2>

        <p>
            Press the "Start editing" button below. An editor will be created using the
            <code><a href="https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.html#method-inline">CKEDITOR.inline()</a></code>
            method with
            <code><a href="https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-startupFocus">config.startupFocus</a></code>
            set to <code>true</code>.
        </p>
    </div>

    <script>
    // The inline editor should be enabled on an element with "contenteditable" attribute set to "true".
    // Otherwise CKEditor 4 will start in read-only mode.
    var introduction = document.getElementById('introduction');
    introduction.setAttribute('contenteditable', true);

    CKEDITOR.inline('introduction', {
        // Allow some non-standard markup that we used in the introduction.
        extraAllowedContent: 'a(documentation);abbr[title];code',
        removePlugins: 'stylescombo',
        extraPlugins: 'sourcedialog',
        removeButtons: 'PasteFromWord',
        // Show toolbar on startup (optional).
        startupFocus: true
    });
    </script>

</body>

</html>