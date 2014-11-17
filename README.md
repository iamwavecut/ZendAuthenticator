# ZendAuthenticator
[![Gitter](https://badges.gitter.im/Join Chat.svg)](https://gitter.im/WaveCutz/ZendAuthenticator?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
ZendAuthenticator is just an auth plugin for MoxieManager.

## Installation
To install just copy `plugins` folder into your MoxieManager's installation path.

Next add following lines to your MoxieManager's `config.php`:
```
$moxieManagerConfig['authenticator'] = 'ZendAuthenticator';
//$moxieManagerConfig['ZendAuthenticator.LibraryPath'] = '/usr/local/zend/share/ZendFramework/library/'; // optional ZF include path, if not global
```

## License

Software released under the MIT license.

Copyright (c) 2013 WaveCut, http://selitskiy.pro/

Permission is hereby granted, free of charge, to any person
obtaining a copy of this software and associated documentation
files (the "Software"), to deal in the Software without
restriction, including without limitation the rights to use,
copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the
Software is furnished to do so, subject to the following
conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.
