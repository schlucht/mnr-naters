{ pkgs, ...}: {
    channel = "stable-23.11";

    packages = [
        pkgs.gnumake
        pkgs.sass
        pkgs.php
        pkgs.ruby_3_3
    ];
    env = {};
    idx = {
        extensions = [
            "Natizskunk.sftp"
            "bmewburn.vscode-intelephense-client"
            
        ];
        previews = {
            enable = true;
            previews = {};
        };
        workspace = {
            onCreate = {};
            onStart = {};
        };
    };

}