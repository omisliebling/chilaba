<?php
//Namespace der Klasse
namespace System;

class Form
{
	private $page = null;
	
	private $DB;

	/**
	 * Konstruktor der Klasse
	 */
	public function __construct($page = null)
	{
		$this->page = $page;
		$this->DB = $GLOBALS['DB'];
	}
	
	public function printRegistrationForm($checkScript = null)
	{
?>
		<div class="container">
			<div class="page-header">
				<h1>Unsere Produkte <small>Für jeden das Richtige dabei</small></h1>
			</div>
			<div class="row-fluid visible-desktop">
				<div class="span12">
<?php 
	echo $this->page->getBreadcrumb();
?>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span8">
					<div class="row-fluid">
						<h2>Mitglied werden</h2>
						<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta
							felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
							justo sit amet risus.</p>
						<form class="form-horizontal">
<?php
	$tmp = new User();
	$emailE = $tmp->isEmailAlreadyInUse('test@test.de');
	
	if ($emailE) {
		echo "JA!";
	} else {
		echo "NEIN!!";
	}
	
	$userNew = $tmp->createUser("test@test.de","test");

	if ($userNew) {
		echo "ANGELEGT!";
	} else {
		echo "NICHT!!";
	}
?>
							<div class="control-group">
								<label class="control-label" for="inputEmail">E-Mail</label>
								<div class="controls">
									<div class="input-prepend">
										<span class="add-on"><i class="icon-envelope"></i> </span> 
										<input type="email" id="inputRegisterEmail" name="inputRegisterEmail" placeholder="E-Mail-Adresse" required autofocus />
									</div>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputRegisterPassword">Passwort</label>
								<div class="controls">
									<div class="input-prepend">
										<span class="add-on"><i class="icon-lock"></i> </span> 
										<input type="password" id="inputRegisterPassword" name="inputRegisterPassword" placeholder="Passwort" required />
									</div>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputRegisterPasswordRepeat">Passwort wiederholen</label>
								<div class="controls">
									<div class="input-prepend">
										<span class="add-on"><i class="icon-lock"></i> </span> 
										<input type="password" id="inputRegisterPasswordRepeat" name="inputRegisterPasswordRepeat" placeholder="Passwort" required />
									</div>
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
									<button type="submit" class="btn">Registrieren</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="span4 info-box">
					<h2>Informationen</h2>
					<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta
						felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
						justo sit amet risus.</p>
				</div>
			</div>
			<hr>
			<div class="row-fluid">
	            <ul class="thumbnails">
	              <li class="span3">
	                <a href="#" class="thumbnail">
	                  <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQQAAAC0CAYAAABytVLLAAAIhUlEQVR4Xu3avYsUWxMH4N7AL9DARM1EDNVQBP99IxMxUoxFMJBFEBHBj/ftgbO07cxsrXW99K16TMT1TM2pp7p/0907J6enpz8nfwgQIPB/gROB4DggQGAICATHAgECZwICwcFAgIBAcAwQIPC7gCsERwUBAq4QHAMECLhCcAwQIHBEwC2Dw4MAAbcMjgECBNwyOAYIEHDL4BggQCAi4BlCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgbHDQr1+/nt69e3e2sxs3bkxPnjz5Zaenp6fTy5cvpx8/fux+vm/N27dvpzdv3py97t69e9P9+/f/uOMXL15M8/vevn17evTo0S91xv+NH+5b80/v548b8cKDAgJhYwfH+sQa21ue8Osw2HcSrk++seZPQ2FZb32yrwPs39jPxsZWZjsCYUOj/Pbt2/Ts2bPp+/fv0zhxlyfiw4cPp1u3bk3Pnz+fPn/+/Nuak5OT6enTp9OVK1fO1oyTd5y0V69e3V1tXLp0Kdz5sU//5Z7X7/W39hPeuIUXFhAIFyb7ey8YJ/84ka5duzatQ+Lu3bu70JhvFeaTf16z/rO8gphD5M6dO7tL/fkW4+fPn7vXffny5eyWY4TP+nXL8JnfYw6ar1+//nLLsNxf5L0OrdnXx9+TVvmQgEDY+LGxPkkvX768O5Hnv+dP+48fP+46WF7Gr0/+dbCMk3J88s91Hj9+PM3/nq88Rq05dOarkevXr08PHjz47apjft+xZvm69dXIp0+ffgmjQ/vZ+ChabE8gbHjMy5NtPEM49GxgbmO95tiVxvxwcfnpPl9FvH//flq+Zkmz78Qf/7+sM362rBO58sk87NzwCP9zWxMIGx3Z8gTcd3LN214/ZxjrPnz4sPvtwnmBMNeIPvk/FgjnPcAUCBs9yPZsSyBscFaHwmDeauR2YNxWjOcFxy7Rl5/uh64ODt0azD8/9iB01BvPKyL72eA4Wm1JIGxs3MfC4KKBMNc67yHe+leG+74/cCwQIp/+N2/ePHuAed5+NjaOdtsRCBsb+XjQd5F7+fVJGf214/JqY35o+OrVq91DwnHSRp4hLB96Rn5V+k/8GnRjIyu1HYGwoXEe+sLR2OK+E265/eWn+3n39ZHfDiy/q3DoGcLy52vK5ZepztvPhsbQeisCYUPjP/SNv3UgLG8dxleXL/pV4fFehx48rusde6g472f95aV/46vUGxpdma0IhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvMD/ANbXEGO2tfHZAAAAAElFTkSuQmCC">
	                </a>
	              </li>
	              <li class="span3">
	                <a href="#" class="thumbnail">
	                  <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQQAAAC0CAYAAABytVLLAAAIhUlEQVR4Xu3avYsUWxMH4N7AL9DARM1EDNVQBP99IxMxUoxFMJBFEBHBj/ftgbO07cxsrXW99K16TMT1TM2pp7p/0907J6enpz8nfwgQIPB/gROB4DggQGAICATHAgECZwICwcFAgIBAcAwQIPC7gCsERwUBAq4QHAMECLhCcAwQIHBEwC2Dw4MAAbcMjgECBNwyOAYIEHDL4BggQCAi4BlCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgbHDQr1+/nt69e3e2sxs3bkxPnjz5Zaenp6fTy5cvpx8/fux+vm/N27dvpzdv3py97t69e9P9+/f/uOMXL15M8/vevn17evTo0S91xv+NH+5b80/v548b8cKDAgJhYwfH+sQa21ue8Osw2HcSrk++seZPQ2FZb32yrwPs39jPxsZWZjsCYUOj/Pbt2/Ts2bPp+/fv0zhxlyfiw4cPp1u3bk3Pnz+fPn/+/Nuak5OT6enTp9OVK1fO1oyTd5y0V69e3V1tXLp0Kdz5sU//5Z7X7/W39hPeuIUXFhAIFyb7ey8YJ/84ka5duzatQ+Lu3bu70JhvFeaTf16z/rO8gphD5M6dO7tL/fkW4+fPn7vXffny5eyWY4TP+nXL8JnfYw6ar1+//nLLsNxf5L0OrdnXx9+TVvmQgEDY+LGxPkkvX768O5Hnv+dP+48fP+46WF7Gr0/+dbCMk3J88s91Hj9+PM3/nq88Rq05dOarkevXr08PHjz47apjft+xZvm69dXIp0+ffgmjQ/vZ+ChabE8gbHjMy5NtPEM49GxgbmO95tiVxvxwcfnpPl9FvH//flq+Zkmz78Qf/7+sM362rBO58sk87NzwCP9zWxMIGx3Z8gTcd3LN214/ZxjrPnz4sPvtwnmBMNeIPvk/FgjnPcAUCBs9yPZsSyBscFaHwmDeauR2YNxWjOcFxy7Rl5/uh64ODt0azD8/9iB01BvPKyL72eA4Wm1JIGxs3MfC4KKBMNc67yHe+leG+74/cCwQIp/+N2/ePHuAed5+NjaOdtsRCBsb+XjQd5F7+fVJGf214/JqY35o+OrVq91DwnHSRp4hLB96Rn5V+k/8GnRjIyu1HYGwoXEe+sLR2OK+E265/eWn+3n39ZHfDiy/q3DoGcLy52vK5ZepztvPhsbQeisCYUPjP/SNv3UgLG8dxleXL/pV4fFehx48rusde6g472f95aV/46vUGxpdma0IhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvMD/ANbXEGO2tfHZAAAAAElFTkSuQmCC">
	                </a>
	              </li>
	              <li class="span3">
	                <a href="#" class="thumbnail">
	                  <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQQAAAC0CAYAAABytVLLAAAIhUlEQVR4Xu3avYsUWxMH4N7AL9DARM1EDNVQBP99IxMxUoxFMJBFEBHBj/ftgbO07cxsrXW99K16TMT1TM2pp7p/0907J6enpz8nfwgQIPB/gROB4DggQGAICATHAgECZwICwcFAgIBAcAwQIPC7gCsERwUBAq4QHAMECLhCcAwQIHBEwC2Dw4MAAbcMjgECBNwyOAYIEHDL4BggQCAi4BlCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgbHDQr1+/nt69e3e2sxs3bkxPnjz5Zaenp6fTy5cvpx8/fux+vm/N27dvpzdv3py97t69e9P9+/f/uOMXL15M8/vevn17evTo0S91xv+NH+5b80/v548b8cKDAgJhYwfH+sQa21ue8Osw2HcSrk++seZPQ2FZb32yrwPs39jPxsZWZjsCYUOj/Pbt2/Ts2bPp+/fv0zhxlyfiw4cPp1u3bk3Pnz+fPn/+/Nuak5OT6enTp9OVK1fO1oyTd5y0V69e3V1tXLp0Kdz5sU//5Z7X7/W39hPeuIUXFhAIFyb7ey8YJ/84ka5duzatQ+Lu3bu70JhvFeaTf16z/rO8gphD5M6dO7tL/fkW4+fPn7vXffny5eyWY4TP+nXL8JnfYw6ar1+//nLLsNxf5L0OrdnXx9+TVvmQgEDY+LGxPkkvX768O5Hnv+dP+48fP+46WF7Gr0/+dbCMk3J88s91Hj9+PM3/nq88Rq05dOarkevXr08PHjz47apjft+xZvm69dXIp0+ffgmjQ/vZ+ChabE8gbHjMy5NtPEM49GxgbmO95tiVxvxwcfnpPl9FvH//flq+Zkmz78Qf/7+sM362rBO58sk87NzwCP9zWxMIGx3Z8gTcd3LN214/ZxjrPnz4sPvtwnmBMNeIPvk/FgjnPcAUCBs9yPZsSyBscFaHwmDeauR2YNxWjOcFxy7Rl5/uh64ODt0azD8/9iB01BvPKyL72eA4Wm1JIGxs3MfC4KKBMNc67yHe+leG+74/cCwQIp/+N2/ePHuAed5+NjaOdtsRCBsb+XjQd5F7+fVJGf214/JqY35o+OrVq91DwnHSRp4hLB96Rn5V+k/8GnRjIyu1HYGwoXEe+sLR2OK+E265/eWn+3n39ZHfDiy/q3DoGcLy52vK5ZepztvPhsbQeisCYUPjP/SNv3UgLG8dxleXL/pV4fFehx48rusde6g472f95aV/46vUGxpdma0IhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvMD/ANbXEGO2tfHZAAAAAElFTkSuQmCC">
	                </a>
	              </li>
	              <li class="span3">
	                <a href="#" class="thumbnail">
	                  <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQQAAAC0CAYAAABytVLLAAAIhUlEQVR4Xu3avYsUWxMH4N7AL9DARM1EDNVQBP99IxMxUoxFMJBFEBHBj/ftgbO07cxsrXW99K16TMT1TM2pp7p/0907J6enpz8nfwgQIPB/gROB4DggQGAICATHAgECZwICwcFAgIBAcAwQIPC7gCsERwUBAq4QHAMECLhCcAwQIHBEwC2Dw4MAAbcMjgECBNwyOAYIEHDL4BggQCAi4BlCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgNBm0NglEBARCRMkaAk0EBEKTQWuTQERAIESUrCHQREAgbHDQr1+/nt69e3e2sxs3bkxPnjz5Zaenp6fTy5cvpx8/fux+vm/N27dvpzdv3py97t69e9P9+/f/uOMXL15M8/vevn17evTo0S91xv+NH+5b80/v548b8cKDAgJhYwfH+sQa21ue8Osw2HcSrk++seZPQ2FZb32yrwPs39jPxsZWZjsCYUOj/Pbt2/Ts2bPp+/fv0zhxlyfiw4cPp1u3bk3Pnz+fPn/+/Nuak5OT6enTp9OVK1fO1oyTd5y0V69e3V1tXLp0Kdz5sU//5Z7X7/W39hPeuIUXFhAIFyb7ey8YJ/84ka5duzatQ+Lu3bu70JhvFeaTf16z/rO8gphD5M6dO7tL/fkW4+fPn7vXffny5eyWY4TP+nXL8JnfYw6ar1+//nLLsNxf5L0OrdnXx9+TVvmQgEDY+LGxPkkvX768O5Hnv+dP+48fP+46WF7Gr0/+dbCMk3J88s91Hj9+PM3/nq88Rq05dOarkevXr08PHjz47apjft+xZvm69dXIp0+ffgmjQ/vZ+ChabE8gbHjMy5NtPEM49GxgbmO95tiVxvxwcfnpPl9FvH//flq+Zkmz78Qf/7+sM362rBO58sk87NzwCP9zWxMIGx3Z8gTcd3LN214/ZxjrPnz4sPvtwnmBMNeIPvk/FgjnPcAUCBs9yPZsSyBscFaHwmDeauR2YNxWjOcFxy7Rl5/uh64ODt0azD8/9iB01BvPKyL72eA4Wm1JIGxs3MfC4KKBMNc67yHe+leG+74/cCwQIp/+N2/ePHuAed5+NjaOdtsRCBsb+XjQd5F7+fVJGf214/JqY35o+OrVq91DwnHSRp4hLB96Rn5V+k/8GnRjIyu1HYGwoXEe+sLR2OK+E265/eWn+3n39ZHfDiy/q3DoGcLy52vK5ZepztvPhsbQeisCYUPjP/SNv3UgLG8dxleXL/pV4fFehx48rusde6g472f95aV/46vUGxpdma0IhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvIBAyBuqQKCMgEAoM0qNEMgLCIS8oQoEyggIhDKj1AiBvMD/ANbXEGO2tfHZAAAAAElFTkSuQmCC">
	                </a>
	              </li>
	            </ul>
	          </div>
		</div>
<?php
		
/*
?>
<section class="clearfix">
	<h1><?php echo NAV_REGISTER; ?></h1>
	<article class="left">
		<div class="box">
			<div style="width: 100%;">
<?php
	if (!isset($_SESSION['error']) && (isset($_SESSION['successKey']))) {
		unset($_SESSION['redirected']);
		unset($_SESSION['successKey']);
?>
				<div class="rounded-list success">
					<a href="#"><?php echo SUC_USER_ACTIVATION; ?></a>
				</div>
<?php
	} elseif (isset($_SESSION['activationFailed'])) {
		unset($_SESSION['activationFailed']);
?>
				<div class="rounded-list error">
					<a href="#"><?php echo ERR_ACTIVATION_FAILED; ?></a>
				</div>
<?php
	}

	if ((isset($_SESSION['error'])) && (isset($_SESSION['redirected'])) &&
		($_SESSION['redirected'] == 'checkRegistrationForm.php')) {
		unset($_SESSION['redirected']);
?>
						<h1>Ooops!</h1>
				<ol class="rounded-list error">
<?php
	$hint = new Hint();
	$count = count($_SESSION['error']);
	$i = 1;
	foreach ($_SESSION['error'] as $errorMsg) {
		if ($i == $count)
			$hint->displayHints($errorMsg, false, true);
		else
			$hint->displayHints($errorMsg, false, false);
		$i++;
	}
?>
							</ol>
<?php
	} else if (!isset($_SESSION['error']) && (isset($_SESSION['success']))) {
		unset($_SESSION['redirected']);
		unset($_SESSION['success']);
		unset($_SESSION['temp']);
?>
					<div class="rounded-list success">
					<a href="#"><?php echo SUC_USER_CREATION; ?><span><?php echo HINT_USER_ACTIVATION; ?></span></a>
				</div>
<?php
		}
		?>
				<form action="<?php echo $checkScript; ?>" method="post">
					<label for="usrname">Benutzername</label> <span class="required"><a href="#" class="tooltip small">&emsp;<span><b>Pflichtfeld</b></span></a></span> <input type="text" id="usrname" name="username" tabindex="1" placeholder="Ihr Benutzername" value="<?php echo $this->printInputValue("username"); ?>" <?php if (isset($_SESSION['error']['username'])) echo ' class="error" '; ?> onfocus="setErrorHint(1)" onblur="clearErrorHint()" required="required" /> <label for="email">E-Mail-Adresse</label> <span class="required"><a href="#" class="tooltip small">&emsp;<span><b>Pflichtfeld</b></span></a></span> <input type="email" id="email" name="email" tabindex="2" placeholder="Ihre E-Mail-Adresse" value="<?php echo $this->printInputValue("email"); ?>" <?php if (isset($_SESSION['error']['email'])) echo ' class="error" '; ?> onfocus="setErrorHint(2)" onblur="clearErrorHint()" required="required" /> <label for="pwd">Passwort</label> <span class="required"><a href="#" class="tooltip small">&emsp;<span><b>Pflichtfeld</b></span></a></span>
					<input type="password" id="pwd" name="pwd" tabindex="3" placeholder="Ihr Passwort" <?php if (isset($_SESSION['error']['pwd'])) echo ' class="error" '; ?> onfocus="setErrorHint(3)" onblur="clearErrorHint()" required="required" /> <label for="pwdConf">Passwort bestätigen</label> <span class="required"><a href="#" class="tooltip small">&emsp;<span><b>Pflichtfeld</b></span></a></span> <input type="password" id="pwdConf" name="pwdConf" tabindex="4" class="last <?php if (isset($_SESSION['error']['pwd'])) echo 'error'; ?>" placeholder="Ihr Passwort best&auml;tigen" onfocus="setErrorHint(3)" onblur="clearErrorHint()" required="required" />

					<div class="center">
						<button type="submit" class="button save center" tabindex="5">Ich will mitmachen!</button>
					</div>
<?php
		if(isset($_SESSION['temp']))
			unset($_SESSION['temp']);
		if(isset($_SESSION['error']))
		unset($_SESSION['error']);
?>
				</form>
			</div>
		</div>
	</article>
	<article>
		<div class="box">
			<h1 id="helpBoxTitle">Hilfestellung</h1>
			<div id="errorBox">
				<p>Hier werden Ihnen Informationen angezeigt, sobald Sie eines der Eingabefelder selektieren.</p>
			</div>
		</div>
	</article>
</section>
<?php

*/
	}

	public function printLoginForm($checkScript = null)
	{
	?>
<section class="clearfix">
	<h1><?php echo NAV_LOGIN; ?></h1>
	<article class="left">
		<div class="box">
			<div style="width: 100%;">
	<?php
		if ((((isset($_SESSION['error'])) && (isset($_SESSION['redirected'])) &&
			($_SESSION['redirected'] == 'checkLoginForm.php'))) || (isset($_SESSION['error']['login']))) {
			unset($_SESSION['redirected']);
	?>
							<h1>Ooops!</h1>
				<ol class="rounded-list error">
					<li><a href="#" class="last"><?php echo $_SESSION['error']['login']; ?></a></li>
				</ol>
	<?php
		} else if (!isset($_SESSION['error']) && (isset($_SESSION['success']))) {
			unset($_SESSION['redirected']);
			unset($_SESSION['success']);
			unset($_SESSION['temp']);
	?>
						<div class="rounded-list success">
					<a href="#"><?php echo SUC_USER_LOGIN; ?></a>
				</div>
	<?php
		}
	?>
					<form action="<?php echo $checkScript; ?>" method="post">
					<label for="usrname">Benutzername</label> <span class="required"><a href="#" class="tooltip small">&emsp;<span><b>Pflichtfeld</b></span></a></span> <input type="text" id="usrname" name="username" tabindex="1" placeholder="Ihr Benutzername" value="<?php echo $this->printInputValue("username"); ?>" <?php if (isset($_SESSION['error']['username'])) echo ' class="error" '; ?> onfocus="setErrorHint(1)" onblur="clearErrorHint()" required="required" <?php if(isset($_SESSION['userId'])) echo ' disabled="disabled" '; ?> /> <label for="pwd">Passwort</label> <span class="required"><a href="#" class="tooltip small">&emsp;<span><b>Pflichtfeld</b></span></a></span> <input type="password" id="pwd" name="pwd" tabindex="2" placeholder="Ihr Passwort" <?php if (isset($_SESSION['error']['pwd'])) echo ' class="error" '; ?> onfocus="setErrorHint(3)" onblur="clearErrorHint()" <?php if(isset($_SESSION['userId'])) echo ' disabled="disabled" '; ?> required="required" /> <label><input type="checkbox"
						name="autologin" tabindex="3" <?php if (isset($_SESSION['temp']['autologin']) && $_SESSION['temp']['autologin']) echo ' checked="checked" '; ?> <?php if(isset($_SESSION['userId'])) echo ' disabled="disabled" '; ?>> Angemeldet bleiben.</label>

					<div class="center">
						<button type="submit" class="button save" tabindex="4" <?php if(isset($_SESSION['userId'])) echo ' disabled="disabled" '; ?>><?php echo NAV_LOGIN; ?></button>
					</div>
	<?php
			if(isset($_SESSION['temp']))
				unset($_SESSION['temp']);
			if(isset($_SESSION['error']))
				unset($_SESSION['error']);
	?>
					</form>
			</div>
		</div>
	</article>
	<article>
		<div class="box">
			<h1 id="helpBoxTitle">Hilfestellung</h1>
			<div id="errorBox">
				<p>
	<?php
		if (isset($_SESSION['userId'])) echo 'Sie sind bereits angemeldet, deshalb sind die Eingabefelder deaktiviert.';
		else echo 'Hier werden Ihnen Informationen angezeigt, sobald Sie eines der Eingabefelder selektieren.';
	?>
					</p>
			</div>
		</div>
	</article>
</section>
<?php
	}
	
	public function printNewPoiFormA($checkScript = null)
	{
		?>
<section class="clearfix">
	<h1><?php echo '<a href="'.PROJECT_HTTP_ROOT.'/join-in.html" class="breadcrumb">' .NAV_JOIN_IN . '</a> &#187; ' . NAV_JOIN_IN_NEW_POI; ?> &#187; Schritt 1 von 2</h1>
	<article class="left">
		<div class="box">
			<div style="width: 100%;">
		<?php
			if ((((isset($_SESSION['error'])) && (isset($_SESSION['redirected'])) &&
				($_SESSION['redirected'] == 'checkNewPoiFormA.php')))) {
				unset($_SESSION['redirected']);
		?>
				<h1>Ooops!</h1>
				<ol class="rounded-list error">
<?php
	$hint = new Hint();
	$count = count($_SESSION['error']);
	$i = 1;
	foreach ($_SESSION['error'] as $errorMsg) {
		if ($i == $count)
			$hint->displayHints($errorMsg, false, true);
		else
			$hint->displayHints($errorMsg, false, false);
		$i++;
	}
?>
				</ol>
		<?php
			}
		?>
				<form action="<?php echo $checkScript; ?>" method="post" class="clearfix">
					<div>
						<label for="poiname">Bezeichnung</label> <span class="required"><a href="#" class="tooltip small">&emsp;<span><b>Pflichtfeld</b></span></a></span>
						<input type="text" id="poiname" name="poiname" tabindex="1" placeholder="Geben Sie Ihrem POI einen aussagekräftigen Namen" value="<?php echo $this->printInputValue("poiname"); ?>" <?php if (isset($_SESSION['error']['poiname'])) echo ' class="error" '; ?> onfocus="setErrorHint(4)" onblur="clearErrorHint()" required="required" />
					</div>
					<label for="description">Beschreibung</label> <span class="required"><a href="#" class="tooltip small">&emsp;<span><b>Pflichtfeld</b></span></a></span>
					<textarea id="description" name="description" tabindex="2" placeholder="Beschreiben Sie Ihren POI" <?php if (isset($_SESSION['error']['description'])) echo ' class="error" '; ?> onfocus="setErrorHint(5)" onblur="clearErrorHint()" required="required"><?php echo $this->printInputValue("description"); ?></textarea>
					
					<div>
						<label for="poicategory">Kategorie</label> <span class="required"><a href="#" class="tooltip small">&emsp;<span><b>Pflichtfeld</b></span></a></span><br />
<?php			
	$poi = new Poi();
	$array = $poi->getPoiCategories();
	$utile = new Utile();
	echo '<select id="poicategory" name="poicategory">';
	echo '<option value="0">Bitte wählen:</option>';
	$utile->buildSelectOptions($array);
	echo '</select>';
?>
					</div>
					<label for="poiRating">Bewertung</label> <span class="required"><a href="#" class="tooltip small">&emsp;<span><b>Pflichtfeld</b></span></a></span>
					<select class="rating" id="poiRating" name="poiRating" onchange="setRatingValue()">
						<option value="1">Nicht zu empfehlen</option>
						<option value="2">Bedingt zu empfehlen</option>
						<option value="3">In Ordnung</option>
						<option value="4">Empfehlenswert</option>
						<option value="5">Sehr empfehlenswert</option>
					</select>
					<input type="hidden" id="poiRatingValue" name="poiRatingValue" />
					<div class="top-2">
						<a href="<?php echo PROJECT_HTTP_ROOT; ?>/join-in.html" class="button delete left" tabindex="3">Abbrechen</a>
						<button type="submit" class="button next right" tabindex="4"><?php echo A_NEXT; ?></button>
					</div>
		<?php
		if(isset($_SESSION['temp']))
			unset($_SESSION['temp']);
		if(isset($_SESSION['error']))
			unset($_SESSION['error']);
		?>
				</form>
			</div>
		</div>
	</article>
	<article>
		<div class="box">
			<h1 id="helpBoxTitle">Hilfestellung</h1>
			<div id="errorBox">
				<p>Hier werden Ihnen Informationen angezeigt, sobald Sie eines der Eingabefelder selektieren.</p>
			</div>
		</div>
	</article>
</section>
<?php
		}
		
		public function printNewPoiFormB($checkScript = null)
		{
			?>
		<section class="clearfix">
			<h1><?php echo '<a href="'.PROJECT_HTTP_ROOT.'/join-in.html" class="breadcrumb">' .NAV_JOIN_IN . '</a> &#187; ' . NAV_JOIN_IN_NEW_POI; ?> &#187; Schritt 2 von 2</h1>
			<article class="left">
				<div class="box">
					<div style="width: 100%;">
				<?php
					if ((((isset($_SESSION['error'])) && (isset($_SESSION['redirected'])) &&
						($_SESSION['redirected'] == 'checkNewPoiFormB.php')))) {
						unset($_SESSION['redirected']);
				?>
						<h1>Ooops!</h1>
						<ol class="rounded-list error">
<?php
	$hint = new Hint();
	$count = count($_SESSION['error']);
	$i = 1;
	foreach ($_SESSION['error'] as $errorMsg) {
		if ($i == $count)
			$hint->displayHints($errorMsg, false, true);
		else
			$hint->displayHints($errorMsg, false, false);
		$i++;
	}
?>
						</ol>
				<?php
					}
				?>
						<form action="<?php echo $checkScript; ?>" method="post" class="clearfix">
							<div id="newPoiMap_canvas" style="height: 22em; margin-bottom: 2em;"></div>
							<label for="street">Straße + Hausnummer</label> <span class="required"><a href="#" class="tooltip small">&emsp;<span><b>Pflichtfeld</b></span></a></span>
							<input type="text" id="street" name="street" tabindex="1" placeholder="POI Adresse" value="<?php echo $this->printInputValue("street"); ?>" <?php if (isset($_SESSION['error']['street'])) echo ' class="error" '; ?> onfocus="setErrorHint(4)" onblur="clearErrorHint()" required="required" />
							<label for="zip">Postleitzahl</label> <span class="required"><a href="#" class="tooltip small">&emsp;<span><b>Pflichtfeld</b></span></a></span>
							<input type="text" id="zip" name="zip" tabindex="2" placeholder="POI Postleitzahl" value="<?php echo $this->printInputValue("zip"); ?>" <?php if (isset($_SESSION['error']['zip'])) echo ' class="error" '; ?> onfocus="setErrorHint(6)" onblur="clearErrorHint()" required="required" />
							<label for="city">Stadt</label> <span class="required"><a href="#" class="tooltip small">&emsp;<span><b>Pflichtfeld</b></span></a></span>
							<input type="text" id="city" name="city" tabindex="3" placeholder="POI Stadt" value="<?php echo $this->printInputValue("city"); ?>" <?php if (isset($_SESSION['error']['city'])) echo ' class="error" '; ?> onfocus="setErrorHint(4)" onblur="clearErrorHint()" required="required" />
							<div>
								<a href="<?php echo PROJECT_HTTP_ROOT; ?>/join-in/new-poi.html" class="button delete left" tabindex="5"><?php echo A_BACK; ?></a>
								<button type="submit" class="button next right" tabindex="4"><?php echo A_NEXT; ?></button>
							</div>
				<?php
				if(isset($_SESSION['temp']))
					unset($_SESSION['temp']);
				if(isset($_SESSION['error']))
					unset($_SESSION['error']);
				?>
						</form>
					</div>
				</div>
			</article>
			<article>
				<div class="box">
					<h1>Art der Eingabe</h1>
					<div id="newPoiType">
						<p>Sie haben die Möglichkeit die Adresse von Hand einzugeben
						(<img src="<?php echo PROJECT_HTTP_ROOT; ?>/img/nav/house_one_small.png" alt="" title="Adresse" />)
						oder Sie verwenden die Karte
						(<img src="<?php echo PROJECT_HTTP_ROOT; ?>/img/nav/map_small.png" alt="" title="Google Map" />)
						um den Punkt zu markieren.
						</p>
						<p><strong>Bitte wählen:</strong></p>
						<img src="<?php echo PROJECT_HTTP_ROOT; ?>/img/nav/house_one.png" alt="" title="Adresse" onclick="hideMap()" /> Eingabe der Adresse<br />
						oder<br />
						<img src="<?php echo PROJECT_HTTP_ROOT; ?>/img/nav/map.png" alt="" title="Google Map" onclick="showMap()" /> Markieren der Adresse
					</div>
				</div>
				<div class="box top-2">
					<h1 id="helpBoxTitle">Hilfestellung</h1>
					<div id="errorBox">
						<p>Hier werden Ihnen Informationen angezeigt, sobald Sie eines der Eingabefelder selektieren.</p>
					</div>
				</div>
			</article>
		</section>
		<?php
		}
	
	public function printContactForm($checkScript = null)
	{
?>
<h1 <?php if (isset($_SESSION['error'])) { echo 'style="margin-left:4px;"'; }?>><?php echo NAV_CONTACT; ?></h1>
<div id="three-divs-left-two">
	<h2 <?php if (isset($_SESSION['error'])) { echo 'style="margin-left:4px;"'; }?>>Kontaktformular</h2>
	<p <?php if (isset($_SESSION['error'])) { echo 'style="margin-left:4px;"'; }?>>Wir freuen uns über jede Form von Kontakt, Anregungen, Lob oder Kritik. Also zögern Sie nicht und senden Sie uns eine Nachricht. Wir werden uns dann in Kürze mit Ihnen in Verbindung setzen.</p>

	<form action="<?php echo $checkScript; ?>" method="post" class="uniForm">
<?php
	if ((isset($_SESSION['error'])) && (isset($_SESSION['redirected'])) &&
		($_SESSION['redirected'] == 'checkContactForm.php')) {
		unset($_SESSION['redirected']);
?>
						<div id="errorMsg">
			<h3 class="top-10">Ooops!</h3>
			<ol>
<?php
	foreach ($_SESSION['error'] as $errorMsg) {
?>
								<li>
<?php 
		Hint::displayHints($errorMsg, true);
?>
								</li>
<?php
	}
?>
							</ol>
		</div>
<?php
	} else if (!isset($_SESSION['error']) && (isset($_SESSION['success']))) {
		unset($_SESSION['redirected']);
		unset($_SESSION['success']);
		unset($_SESSION['temp']);
?>
						<div id="okMsg">
			<p><?php echo SUC_EMAIL_TRANSMISSION; ?></p>
		</div>
<?php
	}
?>
				      <fieldset>
			<div <?php if (isset($_SESSION['error']) && !isset($_SESSION['error']['name'])) echo 'id="success"'; ?> class="ctrlHolder <?php if (isset($_SESSION['error']['name'])) echo 'error'; ?>">
				<label for="name">Ihr Name *</label> <input name="name" id="name" data-default-value="Name" value="<?php echo $_SESSION['temp']['name']; ?>" size="35" maxlength="<?php echo MAX_CHARS_NAME; ?>" type="text" class="textInput medium <?php if (isset($_SESSION['error']['name'])) echo 'error'; ?>" />
			</div>

			<div <?php if (isset($_SESSION['error']) && !isset($_SESSION['error']['email'])) echo 'id="success"'; ?> class="ctrlHolder <?php if (isset($_SESSION['error']['email'])) echo 'error'; ?>">
				<label for="email">Ihre E-Mail-Adresse *</label> <input name="email" id="email" data-default-value="E-Mail-Adresse" value="<?php echo $_SESSION['temp']['email']; ?>" size="35" maxlength="<?php echo MAX_CHARS_EMAIL; ?>" type="text" class="textInput medium <?php if (isset($_SESSION['error']['email'])) echo 'error'; ?>" />
			</div>

			<div <?php if (isset($_SESSION['error']) && !isset($_SESSION['error']['subject'])) echo 'id="success"'; ?> class="ctrlHolder <?php if (isset($_SESSION['error']['subject'])) echo 'error'; ?>">
				<label for="subject">Betreff *</label> <input name="subject" id="subject" data-default-value="Betreff" value="<?php echo $_SESSION['temp']['subject']; ?>" size="35" maxlength="<?php echo MAX_CHARS_SUBJECT; ?>" type="text" class="textInput medium <?php if (isset($_SESSION['error']['subject'])) echo 'error'; ?>" />
			</div>

			<div <?php if (isset($_SESSION['error']) && !isset($_SESSION['error']['message'])) echo 'id="success"'; ?> class="ctrlHolder <?php if (isset($_SESSION['error']['message'])) echo 'error'; ?>">
				<label for="message">Ihre Nachricht *</label>
				<textarea name="message" id="message" rows="25" cols="25" maxlength="<?php echo MAX_CHARS_MESSAGE; ?>" <?php if (isset($_SESSION['error']['message'])) echo 'class="error"'; ?>><?php echo $_SESSION['temp']['message']; ?></textarea>
				<p class="charsRemaining"></p>
			</div>
		</fieldset>
		<div class="buttons">
			<button type="submit" class="positive">
				<img src="<?php echo PROJECT_HTTP_ROOT."/images/layout/buttons/tick_16x16.png"; ?>" alt="" /> Abschicken
			</button>

			<button type="reset" class="negative">
				<img src="<?php echo PROJECT_HTTP_ROOT."/images/layout/buttons/cross_16x16.png"; ?>" alt="" /> Zurücksetzen
			</button>
		</div>
<?php
	if (isset($_SESSION['temp']))
		unset($_SESSION['temp']);
	if (isset($_SESSION['error']))
		unset($_SESSION['error']);
?>
				    </form>


	<div class="clear-both"></div>
</div>
<div id="three-divs-right-one">
	<h2><?php echo HTML_TITLE; ?></h2>
	<p class="address">
		Jens Fischer<br /> Papiermühle 35<br /> 66773 Schwalbach<br />
	</p>
	<span class="p_style"><strong>Kontakt</strong></span><br />
	<p class="telephone">
		Telefon<br /> 06834 / 952580
	</p>
	<p class="mail">
		E-Mail<br /> <a href="mailto:info@jpf-online.de">info@<span class="displaynone"></span>jpf-online.de
		</a>
	</p>
	<p class="web">
		Internet<br /> <a href="http://bfw.jpf-online.de">http://bfw.jpf-online.de</a>
	</p>
	<p class="map">
		<a href="<?php echo PROJECT_HTTP_ROOT; ?>/contact/gmap.html">Google Map</a>
	</p>
</div>
<div class="clear-both"></div>
<?php
	}
	
	
	public function printEditProfileForm($checkScript = null)
	{
		$user = new User();
		$userDetails = $user->getUser($_SESSION['userId']);
		$userProfile = $user->getUserProfile($_SESSION['userId']);
?>
<section class="clearfix">
	<h1><?php echo NAV_PROFILE_EDIT; ?></h1>
	<article class="left">
		<div class="box">
			<div style="width: 100%;">
<?php
	if ((isset($_SESSION['error'])) && (isset($_SESSION['redirected'])) &&
		($_SESSION['redirected'] == 'checkEditProfileForm.php')) {
		unset($_SESSION['redirected']);
?>
				<h1>Ooops!</h1>
				<ol class="rounded-list error">
<?php
	$hint = new Hint();
	$count = count($_SESSION['error']);
	$i = 1;
	foreach ($_SESSION['error'] as $errorMsg) {
		if ($i == $count)
			$hint->displayHints($errorMsg, false, true);
		else
			$hint->displayHints($errorMsg, false, false);
		$i++;
	}
?>
				</ol>
<?php
	} else if (!isset($_SESSION['error']) && (isset($_SESSION['success']['editProfile']))) {
		unset($_SESSION['redirected']);
		unset($_SESSION['success']);
		unset($_SESSION['temp']);
?>
				<div class="rounded-list success">
					<a href=""><?php echo SUC_EDIT_PROFILE; ?></a>
				</div>
<?php
		}
		?>
				<form action="<?php echo $checkScript; ?>" method="post" class="clearfix">
					<label for="usrname">Benutzername</label> <span class="required"><a href="#" class="tooltip">&emsp;<span><b>Änderung nicht möglich</b></span></a></span> <input type="text" id="usrname" name="username" tabindex="1" value="<?php echo $userDetails['username']; ?>" disabled="disabled" /> 
					<label for="email">E-Mail-Adresse</label> <span class="required"><a href="#" class="tooltip">&emsp;<span><b>Änderung nicht möglich</b></span></a></span> <input type="email" id="email" name="email" tabindex="2" value="<?php echo $userDetails['mail']; ?>" disabled="disabled" /> 
					<label for="firstname">Vorname</label><input type="text" id="firstname" name="firstname" tabindex="3" placeholder="Ihr Vorname" value="<?php if (isset($_SESSION['temp']['firstname'])) echo $this->printInputValue("firstname"); else echo $userProfile['firstname']; ?>" <?php if (isset($_SESSION['error']['firstname'])) echo ' class="error" '; ?> onfocus="setErrorHint(7)" onblur="clearErrorHint()" />
					<label for="lastname">Nachname</label><input type="text" id="lastname" name="lastname" tabindex="4" placeholder="Ihr Nachname" value="<?php if (isset($_SESSION['temp']['lastname'])) echo $this->printInputValue("lastname"); else echo $userProfile['lastname']; ?>" <?php if (isset($_SESSION['error']['lastname'])) echo ' class="error" '; ?> onfocus="setErrorHint(8)" onblur="clearErrorHint()" />
					<label for="sex">Geschlecht</label><br />
					<div style="margin-left: 1.5em;">
						<label><input type="radio" id="sex" name="sex" value="-1" <?php if($userProfile['sex'] == NULL) echo 'checked="checked" '; ?> /> Keine Angabe</label><br />
						<label><input type="radio" id="sex" name="sex" value="0" <?php if($userProfile['sex'] == 0) echo ' checked="checked" '; ?> /> Männlich</label><br />
						<label><input type="radio" id="sex" name="sex" value="1" <?php if($userProfile['sex'] == 1) echo ' checked="checked" '; ?> style="margin-bottom: 1em;" /> Weiblich</label><br />
					</div>
					<label for="homepage">Homepage</label><input type="text" id="homepage" name="homepage" tabindex="5" placeholder="Ihre Homepage" value="<?php if (isset($_SESSION['temp']['homepage'])) echo $this->printInputValue("homepage"); else echo $userProfile['homepage']; ?>" <?php if (isset($_SESSION['error']['homepage'])) echo ' class="error" '; ?> onfocus="setErrorHint(9)" onblur="clearErrorHint()" />
					<label for="facebook">Facebook</label><input type="text" id="facebook" name="facebook" tabindex="6" placeholder="Ihr Facebook Benutzername" value="<?php if (isset($_SESSION['temp']['facebook'])) echo $this->printInputValue("facebook"); else echo $userProfile['facebook']; ?>" <?php if (isset($_SESSION['error']['facebook'])) echo ' class="error" '; ?> onfocus="setErrorHint(11)" onblur="clearErrorHint()" />
					<label for="twitter">Twitter</label><input type="text" id="twitter" name="twitter" tabindex="7" placeholder="Ihr Twitter Benutzername" value="<?php if (isset($_SESSION['temp']['twitter'])) echo $this->printInputValue("twitter"); else echo $userProfile['twitter']; ?>" <?php if (isset($_SESSION['error']['twitter'])) echo ' class="error" '; ?> onfocus="setErrorHint(12)" onblur="clearErrorHint()" />

					<div>
						<a href="<?php echo PROJECT_HTTP_ROOT; ?>/profile.html" class="button delete left" tabindex="8">Abbrechen</a>
						<button type="submit" class="button save right" tabindex="9">Speichern</button>
					</div>
<?php
		if(isset($_SESSION['temp']))
			unset($_SESSION['temp']);
		if(isset($_SESSION['error']))
		unset($_SESSION['error']);
?>
				</form>
			</div>
		</div>
	</article>
	<article>
		<div class="box">
			<h1 id="helpBoxTitle">Hilfestellung</h1>
			<div id="errorBox">
				<p>Hier werden Ihnen Informationen angezeigt, sobald Sie eines der Eingabefelder selektieren.</p>
			</div>
		</div>
	</article>
</section>
<?php
	}
	
	public function checkRegistrationFormData()
	{
		$check = new Check();
		$error = false;
		if (isset($_SESSION['error'])) {
			unset($_SESSION['error']);
		}
		if (isset($_SESSION['temp'])) {
			unset($_SESSION['temp']);
		}
		
		$_SESSION['temp']['username'] 	= trim(substr($_POST['username'],	0, MAX_CHARS_USERNAME));
		$_SESSION['temp']['email'] 		= trim(substr($_POST['email'], 	 	0, MAX_CHARS_EMAIL));
		
		if (!$check->isUsernameValid($_SESSION['temp']['username'])) {
			$arrayHints = Hint::getNameHints();
			$array = array(ERR_USERNAME_NOT_VALID, $arrayHints);
			$_SESSION['error']['username'] = $array;
			$error = true;
		} elseif ($check->isUsernameAlreadyAssigned($_SESSION['temp']['username'])) {
			$arrayHints = Hint::getNameHints();
			$array = array(ERR_USERNAME_ALREADY_ASSIGNED, $arrayHints);
			$_SESSION['error']['username'] = $array;
			$error = true;
		}
		if (!$check->isMailValid($_SESSION['temp']['email'])) {
			$arrayHints = Hint::getEmailHints();
			$array = array(ERR_EMAIL_NOT_VALID, $arrayHints);
			$_SESSION['error']['email'] = $array;
			$error = true;
		} elseif ($check->isMailAlreadyAssigned($_SESSION['temp']['email'])) {
			$arrayHints = Hint::getEmailHints();
			$array = array(ERR_EMAIL_ALREADY_ASSIGNED, $arrayHints);
			$_SESSION['error']['email'] = $array;
			$error = true;
		}
		if (!$check->isPasswordAEqualToPasswordB(md5($_POST['pwd']), md5($_POST['pwdConf']))) {
			$arrayHints = Hint::getPasswordHints();
			$array = array(ERR_PASSWORDS_NOT_EQUAL, $arrayHints);
			$_SESSION['error']['pwd'] = $array;
			$error = true;
		} elseif (!$check->isPasswordSave($_POST['pwd'])) {
			$arrayHints = Hint::getPasswordHints();
			$array = array(ERR_PASSWORD_NOT_STRONG_ENOUGH, $arrayHints);
			$_SESSION['error']['pwd'] = $array;
			$error = true;
		}

		if (!$error) {
			$user = new User();
			$userOk = $user->setUser($_SESSION['temp']['username'], md5($_POST['pwd']), $_SESSION['temp']['email']);

			
		
			// Pruefen, ob der Benutzer erfolgreich angelegt wurde
			if($userOk == null) {
				$_SESSION['error']['userCreation'] = 'Der Benutzer konnte nicht angelegt werden.';
				
				return false;
			} else {

				$body = "Hallo " . $_SESSION['temp']['username'] . ",<br /><br />";
				$body .= "herzlich Willkommen bei Saarpoints!<br /><br />" .
						"Damit Sie sich erfolgreich an unserem System anmelden können,
						müssen Sie noch auf folgenden <a href='".PROJECT_HTTP_ROOT."/activate.html?u=".$_SESSION['temp']['username']."&key=".$userOk."'>Link</a> klicken.<br /><br /><br />" .
						"Sollten Sie den Link nicht anklicken können, bitte kopiere und füge den folgenden Textlink in deinen Browser ein:<br />
						".PROJECT_HTTP_ROOT."/activate.html?u=".$_SESSION['temp']['username']."&key=".$userOk. "<br /><br /><br />" .
						"Mit freundlichen Grüßen<br />
						Ihr Saarpoints Team";

				//Email an den Absender
				$mail = new \PHPMailer();
				
				// als HTML-Mail senden
				$mail->isHTML(true);
				
				//Absenderadresse der Email setzen
				$mail->From = "no-reply@jpf-online.de";
				
				//Name des Abenders setzen
				$mail->FromName = "Saarpoints";
				
				//Empfängeradresse setzen
				$mail->AddAddress($_SESSION['temp']['email']);
				
				//Betreff der Email setzen
				$mail->Subject = "Ihre Registrierung bei Saarpoints";
				
				//Text der EMail setzen
				$mail->Body = $body;
				
				//EMail senden und überprüfen ob sie versandt wurde
				if(!$mail->Send()) {
					$_SESSION['error']['phpmailer'] = 'Die Email konnte nicht gesendet werden.'."<br />";
					$_SESSION['error']['phpmailer'] .= 'Fehler: ' . $mail->ErrorInfo;
				
					return false;
				} else {
					return true;
				}
			}
		} else {
			return false;
		}
	}


	public function checkLoginFormData()
	{
		$user 	= new User();

		if (isset($_SESSION['error'])) {
			unset($_SESSION['error']);
		}
		if (isset($_SESSION['temp'])) {
			unset($_SESSION['temp']);
		}

		$_SESSION['temp']['username'] 	= trim(substr($_POST['username'],	0, MAX_CHARS_USERNAME));
		$_SESSION['temp']['autologin']	= isset($_POST['autologin']);
		
		$loginOk = $user->loginUser($_SESSION['temp']['username'], md5($_POST['pwd']), $_SESSION['temp']['autologin']);
		
		if (!$loginOk) {
			$_SESSION['error']['login'] = ERR_LOGIN_NOT_VALID;
			
			return false;
		} else {
			$_SESSION['success'] = 'Angemeldet';
			$_SESSION['temp']['redirected'] = 'checkLoginFormData';
			return true;
		}
	}

	
	public function checkNewPoiFormAData()
	{
		$poi = new Poi();
		$error = false;
	
		if (isset($_SESSION['error'])) {
			unset($_SESSION['error']);
		}
		if (isset($_SESSION['temp'])) {
			unset($_SESSION['temp']);
		}

		$_SESSION['temp']['poiname'] 		= trim(substr($_POST['poiname'], 0, MAX_CHARS_POINAME));
		$_SESSION['temp']['description']	= trim($_POST['description']);
		$_SESSION['temp']['rating']			= $_POST['poiRatingValue'];
		$_SESSION['temp']['category']		= $_POST['poicategory'];
		
		if (strlen($_SESSION['temp']['poiname']) < MIN_CHARS_POINAME) {
			$_SESSION['error']['poiname'] = ERR_POINAME_NOT_VALID;
			$error = true;
		}
		if (!isset($_SESSION['temp']['category']) || $_SESSION['temp']['category'] == 0 || !is_numeric($_SESSION['temp']['category'])) {
			$_SESSION['error']['category'] = ERR_POI_CATEGORY_NOT_VALID;
			$error = true;
		}
		if (!isset($_SESSION['temp']['rating']) || $_SESSION['temp']['rating'] == 0 || !is_numeric($_SESSION['temp']['rating'])) {
			$_SESSION['error']['rating'] = ERR_RATING_NOT_VALID;
			$error = true;
		}
		
		if ($error) {
			return false;
		} else {
			// POI Angaben speichern, $_SESSION['temp'] wird ja geleert
			$_SESSION['newpoi']['poiname'] 		= $_SESSION['temp']['poiname'];
			$_SESSION['newpoi']['description'] 	= $_SESSION['temp']['description'];
			$_SESSION['newpoi']['category'] 	= $_SESSION['temp']['category'];
			$_SESSION['newpoi']['rating'] 		= $_SESSION['temp']['rating'];

// 			$_SESSION['success'] = 'Angemeldet';
			$_SESSION['temp']['redirected'] = 'checkNewPoiFormAData';
			return true;
		}
	}
	
	
	public function checkNewPoiFormBData()
	{
		$error = false;
		$check = new Check();
		$utile = new Utile();
		$poi = new Poi();
		
		if (isset($_SESSION['error'])) {
			unset($_SESSION['error']);
		}
		if (isset($_SESSION['temp'])) {
			unset($_SESSION['temp']);
		}
	
		$_SESSION['temp']['street'] 	= trim(substr($_POST['street'],	0, MAX_CHARS_POI_STREET));
		$_SESSION['temp']['zip']		= trim(substr($_POST['zip'],	0, MAX_CHARS_POI_ZIP));
		$_SESSION['temp']['city']		= trim(substr($_POST['city'],	0, MAX_CHARS_POI_CITY));
		
		if (strlen($_SESSION['temp']['zip']) < MAX_CHARS_POI_ZIP) {
			$_SESSION['error']['zip'] = ERR_POI_ZIP_NOT_VALID;
			$error = true;
		} elseif (!$check->isZipCodeValid($_SESSION['temp']['zip'])) {
			$_SESSION['error']['zip'] = ERR_POI_ZIP_NOT_VALID;
			$error = true;
		}
		if ($poi->isPoiAddressAlreadyAssigned($_SESSION['temp']['street'], $_SESSION['temp']['zip'], $_SESSION['temp']['city'])) {
			$_SESSION['error']['address'] = ERR_POI_ADDRESS_ALREADY_ASSIGNED;
			$error = true;
		}
		
		// Ist die Adresse gueltig?
		$address = $_SESSION['temp']['street'] . ', ' . $_SESSION['temp']['zip'] . ' ' . $_SESSION['temp']['city'];
		$coordinates = $utile->getCoordinates($address);
		$lat = $coordinates[0];
		$lng = $coordinates[1];
		$coordinatesOk = $check->isAddressValid($lat, $lng);
		if (!$coordinatesOk) {
			$_SESSION['error']['address'] = ERR_POI_ADDRESS_NOT_VALID;
			$error = true;
		}
		
		if ($error) {
			return false;
		} else {
			// POI Angaben speichern, $_SESSION['temp'] wird ja geleert
			$_SESSION['newpoi']['street'] 	= $_SESSION['temp']['street'];
			$_SESSION['newpoi']['zip'] 		= $_SESSION['temp']['zip'];
			$_SESSION['newpoi']['city'] 	= $_SESSION['temp']['city'];
			$_SESSION['newpoi']['lat'] 		= $lat;
			$_SESSION['newpoi']['lng'] 		= $lng;
			
			$poiOk = $poi->setPoi($_SESSION['userId'], $_SESSION['newpoi']['poiname'], $_SESSION['newpoi']['description'], $_SESSION['newpoi']['category'],
								  $_SESSION['newpoi']['street'], $_SESSION['newpoi']['zip'], $_SESSION['newpoi']['city'], 
								  $_SESSION['newpoi']['lat'], $_SESSION['newpoi']['lng'], $_SESSION['newpoi']['rating']);
	
			// $_SESSION['success'] = 'Angemeldet';
			$_SESSION['temp']['redirected'] = 'checkNewPoiFormBData';
			return true;
		}
	}


	public function checkContactFormData()
	{
		$error = false;
		if (isset($_SESSION['error'])) {
			unset($_SESSION['error']);
		}
		if (isset($_SESSION['temp'])) {
			unset($_SESSION['temp']);
		}
	
		$_SESSION['temp']['name'] 		= trim(substr($_POST['username'], 	 0, MAX_CHARS_NAME));
		$_SESSION['temp']['email'] 		= trim(substr($_POST['email'], 	 0, MAX_CHARS_EMAIL));
		$_SESSION['temp']['subject'] 	= trim(substr($_POST['subject'], 0, MAX_CHARS_SUBJECT));
		$_SESSION['temp']['message']	= trim(substr($_POST['message'], 0, MAX_CHARS_MESSAGE));
	
		if (!Check::isNameValid($_SESSION['temp']['name'])) {
			$arrayHints = Hint::getNameHints();
			$array = array(ERR_NAME_NOT_VALID, $arrayHints);
			$_SESSION['error']['name'] = $array;
			$error = true;
		}
		if (!Check::isMailValid($_SESSION['temp']['email'])) {
			$arrayHints = Hint::getEmailHints();
			$array = array(ERR_EMAIL_NOT_VALID, $arrayHints);
			$_SESSION['error']['email'] = $array;
			$error = true;
		}
		if (strlen($_SESSION['temp']['subject']) < MIN_CHARS_SUBJECT) {
			$arrayHints = Hint::getSubjectHints();
			$array = array(ERR_SUBJECT_NOT_VALID, $arrayHints);
			$_SESSION['error']['subject'] = $array;
			$error = true;
		}
		if (strlen($_SESSION['temp']['message']) < MIN_CHARS_MESSAGE) {
			$arrayHints = Hint::getMessageHints();
			$array = array(ERR_MESSAGE_NOT_VALID, $arrayHints);
			$_SESSION['error']['message'] = $array;
			$error = true;
		}
	
		if (!$error) {
			$browserInfo = Utile::getBrowser();
				
			$body = "Browser: " . $browserInfo['name'] . " " . $browserInfo['version'] . "\r\n" .
					"Platform: " .$browserInfo['platform'] . "\r\nReports: \r\n" . $browserInfo['userAgent'] . "\r\n\r\n";
			$body .= $_SESSION['temp']['name'] . " hat am " . date("d.m.Y", time()) .
			" um ". date("H:i", time()) ." Uhr folgende Nachricht verfasst: \r\n\r\n";
			$body .= wordwrap($_SESSION['temp']['message'], 70);
				
			$body2 = Utile::getGreeting() . " " . $_SESSION['temp']['name'] . ".\r\n\r\n";
			$body2 .= "Sie haben am " . date("d.m.Y", time()) .
			" um ". date("H:i", time()) ." Uhr folgende Nachricht verfasst: \r\n\r\n";
			$body2 .= wordwrap($_SESSION['temp']['message'], 70) . "\r\n\r\n";
			$body2 .= "Wir werden uns ggf. in Kürze mit Ihnen in Verbindung setzen.\r\n\r\n\r\n" .
					"Mit freundlichen Grüßen\r\nIhr Blue Fish Webdesign Team";
				
			//Email an Blue Fish Webdesign
			$mail = new \PHPMailer();
			//Email an den Absender
			$mail2 = new \PHPMailer();
	
			//Absenderadresse der Email setzen
			$mail->From = $_SESSION['temp']['email'];
			$mail2->From = "no-reply@jpf-online.de";
	
			//Name des Abenders setzen
			$mail->FromName = $_SESSION['temp']['name'];
			$mail2->FromName = "Blue Fish Webdesign Team";
	
			//Empfängeradresse setzen
			$mail->AddAddress("mail@jpf-online.de");
			$mail2->AddAddress($_SESSION['temp']['email']);
	
			//Betreff der Email setzen
			$mail->Subject = $_SESSION['temp']['subject'];
			$mail2->Subject = "Ihre Mitteilung an Blue Fish Webdesign";
	
			//Text der EMail setzen
			$mail->Body = $body;
			$mail2->Body = $body2;
	
			//EMail senden und überprüfen ob sie versandt wurde
			if(!$mail->Send() || !$mail2->Send()) {
				$_SESSION['error']['phpmailer'] = 'Die Email konnte nicht gesendet werden.'."<br />";
				$_SESSION['error']['phpmailer'] .= 'Fehler: ' . $mail->ErrorInfo;
	
				return false;
			} else {
				return true;
			}
	
		} else {
			$_SESSION['error']['required'] = ERR_REQUIRED;
			return false;
		}
	}
	
	public function checkEditProfileFormData()
	{
		$check = new Check();
		$user = new User();
		$error = false;
		$changed = false;
		if (isset($_SESSION['error'])) {
			unset($_SESSION['error']);
		}
		if (isset($_SESSION['temp'])) {
			unset($_SESSION['temp']);
		}
	
		$_SESSION['temp']['firstname'] 	= trim(substr($_POST['firstname'],	0, MAX_CHARS_FIRST_NAME));
		$_SESSION['temp']['lastname'] 	= trim(substr($_POST['lastname'], 	0, MAX_CHARS_LAST_NAME));
		$_SESSION['temp']['sex'] 		= $_POST['sex'];
		$_SESSION['temp']['homepage'] 	= trim(substr($_POST['homepage'],	0, 255));
		$_SESSION['temp']['facebook'] 	= trim(substr($_POST['facebook'],	0, MAX_CHARS_FACEBOOK));
		$_SESSION['temp']['twitter'] 	= trim(substr($_POST['twitter'],	0, MAX_CHARS_TWITTER));
		
		$oldProfile = $user->getUserProfile($_SESSION['userId']);
		
		if ($_POST['sex'] == -1)
			$_SESSION['temp']['sex'] = null;
		
		if ($oldProfile['firstname'] 	!= $_SESSION['temp']['firstname'] ||
			$oldProfile['lastname'] 	!= $_SESSION['temp']['lastname'] ||
			$oldProfile['sex'] 			!= $_SESSION['temp']['sex'] ||
			$oldProfile['homepage'] 	!= $_SESSION['temp']['homepage'] ||
			$oldProfile['facebook'] 	!= $_SESSION['temp']['facebook'] ||
			$oldProfile['twitter']		!= $_SESSION['temp']['twitter']) {
			$changed = true;
		}
		
		if ($changed) {
			if ($_SESSION['temp']['firstname'] != null && !$check->isFirstNameValid($_SESSION['temp']['firstname'])) {
				$_SESSION['error']['firstname'] = ERR_FIRST_NAME_NOT_VALID;
				$error = true;
			}
			if ($_SESSION['temp']['lastname'] != null && !$check->isLastNameValid($_SESSION['temp']['lastname'])) {
				$_SESSION['error']['lastname'] = ERR_LAST_NAME_NOT_VALID;
				$error = true;
			}
			if ($_SESSION['temp']['sex'] != null && !is_numeric($_SESSION['temp']['sex'])) {
				$_SESSION['error']['sex'] = ERR_SEX_NOT_VALID;
				$error = true;
			}
			if ($_SESSION['temp']['homepage'] != null && !$check->isHomepageValid($_SESSION['temp']['homepage'])) {
				$_SESSION['error']['homepage'] = ERR_HOMEPAGE_NOT_VALID;
				$error = true;
			}
			if ($_SESSION['temp']['facebook'] != null && !$check->isFacebookValid($_SESSION['temp']['facebook'])) {
				$_SESSION['error']['facebook'] = ERR_FACEBOOK_NOT_VALID;
				$error = true;
			}
			if ($_SESSION['temp']['twitter'] != null && !$check->isTwitterValid($_SESSION['temp']['twitter'])) {
				$_SESSION['error']['twitter'] = ERR_TWITTER_NOT_VALID;
				$error = true;
			}
			
			if ($error) {
				return false;
			} else {
				$userOk = $user->setUserProfile($_SESSION['userId'], $_SESSION['temp']['firstname'], $_SESSION['temp']['lastname'],
												$_SESSION['temp']['sex'], $_SESSION['temp']['homepage'], $_SESSION['temp']['facebook'],
												$_SESSION['temp']['twitter']);
		
				$_SESSION['temp']['redirected'] = 'checkEditProfileFormData';
				$_SESSION['success']['editProfile'] = SUC_EDIT_PROFILE;
				return true;
			}
		} else {
			$_SESSION['error']['nochanges'] = ERR_NO_CHANGES;
			return false;
		}
	}
	
	protected function printInputValue($value) {
		if (isset($_SESSION['temp'][$value])) 
			return $_SESSION['temp'][$value];
	}
	
}