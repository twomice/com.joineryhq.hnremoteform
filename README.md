# CiviCRM: HearNebraska RemoteForm improvements

CiviCRM extension providing various RemoteForm improvements specific to the needs of HearNebraska:

* Insert the URL of the remote page into a specified custom field, if that custom field is
  provided in the profile on the page. (This custom field is hidden in the remote form.)

The extension is licensed under [GPL-3.0](LICENSE.txt).

## Usage

Quick overview in video: https://youtu.be/QRRJ_-uNoA0

## Installation
### Web UI

This extension has not yet been published for installation via the web UI.

### CLI, Zip

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl com.joineryhq.hnremoteform@https://github.com/twomice/com.joineryhq.hnremoteform/archive/master.zip
```

### CLI, Git

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/twomice/com.joineryhq.hnremoteform.git
cv en hnremoteform
```

## Support
![screenshot](/images/joinery-logo.png)

Joinery provides services for CiviCRM including custom extension development,
training, data migrations, and more. We aim to keep this extension in good working
order, and will do our best to respond appropriately to issues reported on its
[github issue queue](https://github.com/twomice/com.joineryhq.hnremoteform/issues).
In addition, if you require urgent or highly customized improvements to this
extension, we may suggest conducting a fee-based project under our standard
commercial terms.  In any case, the place to start is the [github issue queue](https://github.com/twomice/com.joineryhq.hnremoteform/issues) --
let us hear what you need and we'll be glad to help however we can.

And, if you need help with any other aspect of CiviCRM -- from hosting to custom
development to strategic consultation and more -- please contact us directly via
https://joineryhq.com
