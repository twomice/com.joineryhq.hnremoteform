# CiviCRM: HearNebraska RemoteForm improvements

CiviCRM extension providing various RemoteForm improvements specific to the needs of HearNebraska:

* Insert the URL of the remote page into a specified custom field, if that custom field is
  provided in the profile on the page. (This custom field is hidden in the remote form.)

The extension is licensed under [GPL-3.0](LICENSE.txt).

## Usage

(* FIXME: Where would a new user navigate to get started? What changes would they see? *)

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
