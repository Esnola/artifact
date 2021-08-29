<?php

use AncientWorks\Artifact\Artifact;
use AncientWorks\Artifact\Utils\Notice;

defined('ABSPATH') || exit; ?>

<div class="jp-masthead">
    <div class="jp-masthead__inside-container">
        <div class="jp-masthead__logo-container">
            <a class="jp-masthead__logo-link" href="https://oxyrealm.test/wp-admin/admin.php?page=artifact">
                <svg height="32" viewBox="0 0 1600 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                    <g transform="matrix(1,0,0,1,-66.0536,1.39606)">
                        <path d="M192,512L320,512C324.389,512 328,508.389 328,504L328,461.6C383.629,450.166 423.934,400.791 424,344L424,216C423.909,162.27 387.775,114.829 336,100.464L336,56C336,51.611 332.389,48 328,48L264,48L264,8C264,3.611 260.389,0 256,0C251.611,-0 248,3.611 248,8L248,48L192,48C187.611,48 184,51.611 184,56L184,98.4C128.371,109.834 88.066,159.209 88,216L88,344C88.066,400.791 128.371,450.166 184,461.6L184,504C184,508.389 187.611,512 192,512ZM312,464L312,496L200,496L200,464L312,464ZM200,96L200,64L320,64L320,96L200,96ZM208,112L304,112C339.405,112.034 372.443,130.158 391.496,160L120.504,160C139.557,130.158 172.595,112.034 208,112ZM112,176L400,176C405.296,188.67 408.016,202.268 408,216L392,216C387.611,216 384,219.611 384,224C384,228.389 387.611,232 392,232L408,232L408,272L104,272L104,232L312,232C316.389,232 320,228.389 320,224C320,219.611 316.389,216 312,216L104,216C103.984,202.268 106.704,188.67 112,176ZM104,288L408,288L408,328L176,328C171.611,328 168,331.611 168,336C168,340.389 171.611,344 176,344L408,344C408.016,357.732 405.296,371.33 400,384L112,384C106.704,371.33 103.984,357.732 104,344L104,288ZM120.504,400L391.496,400C372.443,429.842 339.405,447.966 304,448L208,448C172.595,447.966 139.557,429.842 120.504,400Z" style="fill:url(#_Linear1);fill-rule:nonzero;" />
                    </g>
                    <g transform="matrix(1,0,0,1,-66.0536,1.39606)">
                        <path d="M344,232L360,232C364.389,232 368,228.389 368,224C368,219.611 364.389,216 360,216L344,216C339.611,216 336,219.611 336,224C336,228.389 339.611,232 344,232Z" style="fill:url(#_Linear2);fill-rule:nonzero;" />
                    </g>
                    <g transform="matrix(1,0,0,1,-66.0536,1.39606)">
                        <path d="M128,344L144,344C148.389,344 152,340.389 152,336C152,331.611 148.389,328 144,328L128,328C123.611,328 120,331.611 120,336C120,340.389 123.611,344 128,344Z" style="fill:url(#_Linear3);fill-rule:nonzero;" />
                    </g>
                    <g transform="matrix(1,0,0,1,-67.8739,189.698)">
                        <g transform="matrix(570,0,0,570,468.308,256)">
                            <path d="M0.007,-0L0.133,-0.672L0.222,-0.672L0.347,-0L0.264,-0L0.24,-0.148L0.116,-0.148L0.09,-0L0.007,-0ZM0.129,-0.228L0.225,-0.228L0.178,-0.508L0.176,-0.508L0.129,-0.228Z" style="fill-rule:nonzero;" />
                        </g>
                        <g transform="matrix(570,0,0,570,670.09,256)">
                            <path d="M0.051,-0L0.051,-0.443L0.129,-0.443L0.129,-0.323L0.131,-0.323C0.146,-0.376 0.159,-0.41 0.17,-0.426C0.18,-0.442 0.194,-0.45 0.213,-0.45C0.227,-0.45 0.241,-0.446 0.253,-0.437L0.247,-0.357C0.236,-0.364 0.225,-0.368 0.213,-0.368C0.188,-0.368 0.168,-0.346 0.153,-0.302C0.137,-0.258 0.129,-0.216 0.129,-0.176L0.129,-0L0.051,-0Z" style="fill-rule:nonzero;" />
                        </g>
                        <g transform="matrix(570,0,0,570,826.784,256)">
                            <path d="M0.218,-0.074L0.218,-0.005C0.191,0.007 0.168,0.012 0.149,0.012C0.094,0.012 0.067,-0.021 0.067,-0.087L0.067,-0.375L0.016,-0.375L0.016,-0.381C0.053,-0.427 0.094,-0.485 0.138,-0.557L0.145,-0.557L0.145,-0.443L0.218,-0.443L0.218,-0.375L0.145,-0.375L0.145,-0.122C0.145,-0.099 0.147,-0.083 0.152,-0.074C0.156,-0.066 0.164,-0.062 0.176,-0.062C0.187,-0.062 0.201,-0.066 0.218,-0.074Z" style="fill-rule:nonzero;" />
                        </g>
                        <g transform="matrix(570,0,0,570,957.316,256)">
                            <path d="M0.089,-0.587C0.076,-0.587 0.066,-0.591 0.057,-0.6C0.048,-0.609 0.044,-0.619 0.044,-0.632C0.044,-0.645 0.048,-0.655 0.057,-0.664C0.066,-0.672 0.076,-0.677 0.089,-0.677C0.101,-0.677 0.112,-0.672 0.121,-0.664C0.129,-0.655 0.134,-0.645 0.134,-0.632C0.134,-0.619 0.129,-0.609 0.121,-0.6C0.112,-0.591 0.101,-0.587 0.089,-0.587ZM0.05,-0L0.05,-0.443L0.128,-0.443L0.128,-0L0.05,-0Z" style="fill-rule:nonzero;" />
                        </g>
                        <g transform="matrix(570,0,0,570,1058.07,256)">
                            <path d="M0.057,-0L0.057,-0.375L0.022,-0.375L0.022,-0.443L0.057,-0.443L0.057,-0.513C0.057,-0.622 0.109,-0.677 0.213,-0.677L0.213,-0.612C0.186,-0.612 0.166,-0.604 0.154,-0.587C0.141,-0.571 0.135,-0.545 0.135,-0.509L0.135,-0.443L0.179,-0.443L0.179,-0.375L0.135,-0.375L0.135,-0L0.057,-0Z" style="fill-rule:nonzero;" />
                        </g>
                        <g transform="matrix(570,0,0,570,1165.22,256)">
                            <path d="M0.322,-0.082L0.322,-0.023C0.297,-0.001 0.277,0.01 0.261,0.01C0.232,0.01 0.213,-0.009 0.204,-0.046C0.175,-0.007 0.147,0.012 0.119,0.012C0.096,0.012 0.076,0.001 0.058,-0.021C0.041,-0.044 0.032,-0.07 0.032,-0.1C0.032,-0.135 0.044,-0.165 0.069,-0.189C0.093,-0.213 0.137,-0.244 0.201,-0.281L0.201,-0.323C0.201,-0.362 0.185,-0.381 0.154,-0.381C0.123,-0.381 0.086,-0.357 0.043,-0.308L0.043,-0.398C0.083,-0.436 0.122,-0.455 0.161,-0.455C0.194,-0.455 0.221,-0.444 0.244,-0.423C0.267,-0.401 0.279,-0.372 0.279,-0.336L0.279,-0.086C0.279,-0.069 0.283,-0.06 0.291,-0.06C0.296,-0.06 0.306,-0.067 0.322,-0.082ZM0.201,-0.113L0.201,-0.227C0.139,-0.19 0.109,-0.152 0.109,-0.112C0.109,-0.097 0.112,-0.085 0.12,-0.076C0.127,-0.067 0.136,-0.062 0.147,-0.062C0.16,-0.062 0.173,-0.069 0.184,-0.084C0.195,-0.099 0.201,-0.109 0.201,-0.113Z" style="fill-rule:nonzero;" />
                        </g>
                        <g transform="matrix(570,0,0,570,1355.04,256)">
                            <path d="M0.271,-0.087L0.271,-0.012C0.246,0.004 0.22,0.012 0.194,0.012C0.149,0.012 0.111,-0.009 0.081,-0.053C0.05,-0.096 0.035,-0.151 0.035,-0.218C0.035,-0.287 0.05,-0.344 0.08,-0.389C0.11,-0.433 0.148,-0.455 0.194,-0.455C0.216,-0.455 0.239,-0.45 0.264,-0.439L0.264,-0.359C0.241,-0.374 0.221,-0.381 0.206,-0.381C0.178,-0.381 0.156,-0.366 0.14,-0.338C0.123,-0.309 0.115,-0.27 0.115,-0.22C0.115,-0.172 0.124,-0.133 0.142,-0.105C0.16,-0.076 0.184,-0.062 0.214,-0.062C0.231,-0.062 0.25,-0.07 0.271,-0.087Z" style="fill-rule:nonzero;" />
                        </g>
                        <g transform="matrix(570,0,0,570,1515.07,256)">
                            <path d="M0.218,-0.074L0.218,-0.005C0.191,0.007 0.168,0.012 0.149,0.012C0.094,0.012 0.067,-0.021 0.067,-0.087L0.067,-0.375L0.016,-0.375L0.016,-0.381C0.053,-0.427 0.094,-0.485 0.138,-0.557L0.145,-0.557L0.145,-0.443L0.218,-0.443L0.218,-0.375L0.145,-0.375L0.145,-0.122C0.145,-0.099 0.147,-0.083 0.152,-0.074C0.156,-0.066 0.164,-0.062 0.176,-0.062C0.187,-0.062 0.201,-0.066 0.218,-0.074Z" style="fill-rule:nonzero;" />
                        </g>
                    </g>
                    <defs>
                        <linearGradient id="_Linear1" x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(-492.8,492.8,-492.8,-492.8,516,20)">
                            <stop offset="0" style="stop-color:rgb(247,148,30);stop-opacity:1" />
                            <stop offset="1" style="stop-color:rgb(238,42,123);stop-opacity:1" />
                        </linearGradient>
                        <linearGradient id="_Linear2" x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(-1971.2,985.6,-985.6,-1971.2,2480,296)">
                            <stop offset="0" style="stop-color:rgb(247,148,30);stop-opacity:1" />
                            <stop offset="1" style="stop-color:rgb(238,42,123);stop-opacity:1" />
                        </linearGradient>
                        <linearGradient id="_Linear3" x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(-1971.2,985.6,-985.6,-1971.2,2056,304)">
                            <stop offset="0" style="stop-color:rgb(247,148,30);stop-opacity:1" />
                            <stop offset="1" style="stop-color:rgb(238,42,123);stop-opacity:1" />
                        </linearGradient>
                    </defs>
                </svg>
            </a>
            <code>
                <?= $this->e(Artifact::$version) ?>
            </code>
        </div>
        <div class="jp-masthead__nav">
            <span class="dops-button-group">
                <a href="<?= add_query_arg(['page' => Artifact::$slug, 'route' => 'dashboard'], admin_url('admin.php')) ?>" type="button" class="dops-button is-compact <?= !isset($_REQUEST['route']) || $_REQUEST['route'] === 'dashboard' ? 'is-primary' : '' ?>">Dashboard</a>
                <a href="<?= add_query_arg(['page' => Artifact::$slug, 'route' => 'settings'], admin_url('admin.php')) ?>" type="button" class="dops-button is-compact <?= isset($_REQUEST['route']) && $_REQUEST['route'] === 'settings' ? 'is-primary' : '' ?>">Settings</a>
            </span>
        </div>
    </div>
</div>

<div class="jp-lower" style="padding-bottom: initial;">
    <div id="jp-admin-notices" aria-live="polite"></div>
    <div aria-live="polite">
        <?php foreach (Notice::lists() as $notice) : ?>

            <div class="dops-notice is-<?= $notice['status'] ?>">
                <span class="dops-notice__icon-wrapper">
                    <?php
                    switch ($notice['status']):
                        case 'info': ?>
                            <svg class="gridicon gridicons-info dops-notice__icon" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g>
                                    <path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"></path>
                                </g>
                            </svg>
                        <?php break;
                        case 'warning': ?>
                            <svg class="gridicon gridicons-warning dops-notice__icon" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g>
                                    <path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm1 15h-2v-2h2v2zm0-4h-2l-.5-6h3l-.5 6z" />
                                </g>
                            </svg>
                        <?php break;
                        case 'success': ?>
                            <svg class="gridicon gridicons-success dops-notice__icon" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g>
                                    <path d="M11 17.768l-4.884-4.884 1.768-1.768L11 14.232l8.658-8.658C17.823 3.39 15.075 2 12 2 6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10c0-1.528-.353-2.97-.966-4.266L11 17.768z" />
                                </g>
                            </svg>
                        <?php break;
                        case 'error': ?>
                            <svg class="gridicon gridicons-error dops-notice__icon" height="24" width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g>
                                    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" />
                                </g>
                            </svg>
                        <?php break;
                        default:
                            break; ?>
                    <?php
                    endswitch; ?>
                </span>
                <span class="dops-notice__content">
                    <span class="dops-notice__text">
                        <?= $notice['message'] ?>
                    </span>
                </span>
                <?php if (!empty($notice['learn_more'])) : ?>
                    <a class="dops-notice__action" href="<?= $notice['learn_more'] ?>" target="_blank">
                        <span>Learn More</span>
                    </a>
                <?php endif; ?>
            </div>

        <?php endforeach; ?>

    </div>
</div>