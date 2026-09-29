<div>
    <form wire:submit="salvar">
        <input type="text" wire:model="nome">
        <input type="number" wire:model="preco">
        <input type="text" wire:model="textura">
        <input type="number" wire:model="peso">
        <input type="text" wire:model="unidade_medida">
        <input type="number" wire:model="qtd_minima">
        <input type="number" wire:model="qtd_estoque">

        <button type="submit">Salvar</button>
    </form>

</div>

